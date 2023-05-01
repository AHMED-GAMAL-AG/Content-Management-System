@extends('admin.theme.default')

@section('title')
    {{ __('المنشورات') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {{ __('المنشورات') }}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> {{ __('الرقم') }}</th>
                                <th> {{ __('العنوان') }}</th>
                                <th> {{ __('slug') }}</th>
                                <th> {{ __('المحتوى') }}</th>
                                <th> {{ __('الكاتب') }}</th>
                                <th> {{ __('النشر') }}</th>
                                <th> {{ __('التصنيف') }}</th>
                                <th> {{ __('تعديل') }}</th>
                                <th> {{ __('حذف') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($post->body, 100) }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>
                                        {{-- if approved = 1 put checked --}}
                                        <input type="checkbox" value="{{ $post->approved }}" name="approved" {{ $post->approved ? 'checked' : '' }} disabled>
                                    </td>
                                    <td>{{ $post->category->title }}</td>
                                    <td>
                                        <form method="GET" action="{{ route('posts.edit', $post->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="float-left"
                                                style="background-color: white;border: none;">
                                                <i class="far fa-edit text-success fa-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}"
                                            onsubmit="return confirm('{{ __('هل أنت متأكد أنك تريد حذف المنشور هذا؟') }}')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="float-left"
                                                style="background-color: white;border: none;">
                                                <i class="far fa-trash-alt text-danger fa-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection