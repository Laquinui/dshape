<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>DShape</title>
</head>
<body>
    <div id="login-area" class="position-relative">
        <div class="container">
            <div class="row text-center position-absolute top-50 start-50 translate-middle">
                {{-- Exibindo conteúdo --}}
                @yield('auth')
            </div> {{-- Fim da row --}}
        </div> {{-- Fim do container --}}

        {{-- Logo DShape --}}
        <div class="position-absolute bottom-0 end-0">
            <a href="/">
                <img class="dshape-logo m-4" src="{{asset('img/dshape_logo.svg')}}">
            </a>
        </div>
    </div> {{-- Fim da área de login --}}

    {{-- BOOTSTRAP --}}
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>