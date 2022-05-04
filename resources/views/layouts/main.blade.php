<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>DShape</title>
</head>
<body>
   
    @yield('container')

    {{-- BOOTSTRAP --}}
    <style href="{{ asset('/js/bootstrap.min.js') }}"></style>
    <style href="{{ asset('/js/popper.min.js') }}"></style>
</body>
</html>