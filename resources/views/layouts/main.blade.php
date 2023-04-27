<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/arch.svg" type="image/png" />

    <link rel="stylesheet" href="/app.css">

    <title>@yield('title', 'Arch Linux')</title>
</head>

<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>
