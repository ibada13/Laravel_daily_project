<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ url('/') }}/build/assets/app-yPzK5JhP.css" type="text/css"/>


    <title>Mypro</title>
</head>
<body class="bg-back">
    {{-- <div class="flex flex-col h-screen "></div> --}}
    @yield('content')
</body>

<script src="{{ url('/') }}/build/assets/app-CifqVuM1.js"></script>
</html>