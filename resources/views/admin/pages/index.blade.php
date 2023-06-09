@extends('admin.theme.default')

@section('title')
    {{ __('الصفحات') }}
@endsection

@section('content')
    <p><a href="{{ route('page.create') }}" class="btn btn-dark">إنشاء صفحة جديدة</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>{{ __('موضوع الصفحة') }}</th>
                <th>{{ __('عنوان الصفحة') }}</th>
                <th>{{ __('تعديل') }}</th>
                <th>{{ __('حذف') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td><a href="{{ route('page.show', $page->slug) }}">{{ $page->slug }}</a></td>
                    <td>
                        <form method="GET" action="{{ route('page.edit', $page->id) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" style="background-color: inherit;border: none;"><i
                                    class="far fa-edit text-success fa-lg"></i></button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('page.destroy', $page->id) }}"
                            onsubmit="return confirm('{{ __('هل أنت متأكد أنك تريد حذف الصفحة؟') }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: inherit;border: none;"><i
                                    class="far fa-trash-alt text-danger fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
