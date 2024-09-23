<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD')</title>
    @include('library.styles')
</head>
<body  style="background-color: #333;">
    @include('components\nav')


    @yield('content')

    @include('library.scripts')
    @include('components\footer')
</body>
</html>
