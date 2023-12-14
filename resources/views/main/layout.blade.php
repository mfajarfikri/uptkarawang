<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Plus Jakarta Sans' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ config('app.name') }}</title>
</head>

<style>
    body {
        font-family: 'Plus Jakarta Sans';
    }
</style>

<body class="bg-noble-800">

    @include('component.navbar')

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
