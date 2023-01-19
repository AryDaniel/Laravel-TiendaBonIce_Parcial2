<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BonIce')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>
</head>
<body style="background-color: #17a2b8;">
    <x-layouts.menu/> {{-- No supe la forma de herencia --}}
    <br><br><br><br><br>

    @yield('content')

    <footer class="text-center">
        <br><br><br><br><br><br>    
        2022 &copy; Cetis107 BonIce
    </footer>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>