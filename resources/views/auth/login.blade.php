@extends('layouts/auth')

@section('auth')
<h2 class="text-uppercase mt-4 mb-4" style="color: var(--white)">Bem vindo</h2>
<div class="card mx-auto card-login shadow">
    <div class="card-body px-5">
        <form action="">
            {{-- E-mail --}}
            <div class="form-floating mb-4 mt-4">
                <input type="email" class="form-control input-login" id="emailUser" placeholder="E-mail">
                <label class="label-login" for="floatingInput">E-mail</label>
            </div>
            {{-- Senha --}}
            <div class="form-floating mb-4">
                <input type="password" class="form-control input-login" id="senhaUser" placeholder="Senha">
                <label class="label-login" for="senhaUser">Senha</label>
            </div>

            {{-- Botão de enviar --}}
            <button class="btn btn-primary btn-lg mb-2" type="submit">Entrar</button>

            {{-- Link para login --}}
            <p class="card-link" style="color: var(--white)">Novo por aqui? 
                <a href="/register">Crie uma conta.<a>
            </p>
        </form>
    </div>
</div> {{-- Fim do card login --}}
@endsection
