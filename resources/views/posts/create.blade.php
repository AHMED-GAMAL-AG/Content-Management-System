@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <h2 class="h4 my-4">
            {{ __('أضف موضوعًا جديدًا') }}
        </h2>
    </div>
    <div class="col-md-8 bg-white py-3">
        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="title" class="mb-2"> {{ __('التصنيف') }}</label>
            <div class="input-group mb-3">
                <select class="form-select" name="category_id">
                    {{-- show all the categories  ['id' => null] to remove the error i use the id in other page --}}
                    @include('lists.categories' , ['id' => null])
                </select>
            </div>

            <label for="title" class="mb-2"> {{ __('عنوان المنشور') }}</label>
            <div class="input-group mb-3">
                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                    name="title" placeholder="حدد عنوان الموضوع" value="{{ old('title') }}">
                @error('title')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="editor" class="mb-2"> {{ __('محتوى المنشور') }}</label>
            <div class="input-group d-inline">
                <textarea id="editor" class="form-control  @error('body') is-invalid @enderror" name="body" rows="3">{{ old('body') }}</textarea>
                @error('body')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-group my-3 file-area">
                <label for="image" class="mb-2">{{ __('صورة الغلاف') }}</label>
                <input type="file" id="image" accept="image/*" onchange="readCoverImage(this);" name="image">
                <div class="input-title"> {{ __('اسحب الصورة إلى هنا أو انقر للاختيار يدويًا') }}</div>
            </div>
            <div class="row">
                <img id="cover-image-thumb" class="col-2" width="100" height="100">
                <span class="input-name col-6"></span>
            </div>

            <button type="submit" class="btn btn-outline-dark my-3"> {{ __('نشر') }}</button>

        </form>
    </div>

    @include('partials.sidebar')
@endsection


@section('script')
    {{-- for image field --}}
    <script>
        function readCoverImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#cover-image-thumb').setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    {{-- Include CKEditor --}}
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: {
                    ui: 'ar',
                    content: 'ar',
                },

                toolbar: { // add the needed tools
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'undo',
                        'redo',
                        '|',
                        'Blockquote',
                    ]
                }

            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
