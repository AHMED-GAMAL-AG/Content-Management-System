<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Cairo Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f0f0f0;
        }

        a {
            text-decoration: none !important;
            color: black;
        }

        ol,
        ul,
        menu {
            list-style: decimal !important;
            padding-right: 2rem !important;
        }

        ul,
        menu {
            list-style: inside !important;
            padding-right: 2rem !important;
        }

        input[type=file] {
            position: absolute !important;
            width: 100% !important;
            height: 100% !important;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            cursor: pointer;
        }

        .input-title {
            width: 100%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px dashed rgba(255, 255, 255, 0.2);
            text-align: center;
            transition: background 0.3s ease-in-out;
        }

        .file-area:hover .input-title {
            background: rgba(255, 255, 255, 0.1);
        }

        input[type=file]+.input-title {
            border-color: #f0f0f0;
            background-color: #f0f0f0;
        }
    </style>

    @yield('style')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body dir="rtl" style="text-align: right">

    <div>
        @include('partials.navbar')
    </div>

    <main class="py-4 md-5">
        <div class="container">
            <div class="row">
                @include('alerts.success')

                @yield('content')
            </div>
        </div>

        @include('partials.footer')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- Font Awesome Kit --}}
    <script src="https://kit.fontawesome.com/c49981de61.js" crossorigin="anonymous"></script>
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    @yield('script')
</body>

</html>
