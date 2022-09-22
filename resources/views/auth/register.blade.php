@extends('layouts/auth')

@section('auth')
<h2 class="text-uppercase mt-4 mb-4" style="color: var(--white)">Comece agora</h2>
<div class="card mx-auto card-login shadow">
    <div class="card-body px-5">
        <form action="">
            {{-- Nome de usuário --}}
            <div class="form-floating mb-4 mt-3">
                <input type="text" class="form-control input-login" id="nomeUser" placeholder="Nome de usuário">
                <label class="label-login" for="nomeUser">Nome de usuário</label>
            </div>
            {{-- E-mail --}}
            <div class="form-floating mb-4">
                <input type="email" class="form-control input-login" id="emailUser" placeholder="E-mail">
                <label class="label-login" for="floatingInput">E-mail</label>
            </div>
            {{-- Senha --}}
            <div class="form-floating mb-4">
                <input type="password" class="form-control input-login" id="senhaUser" placeholder="Senha">
                <label class="label-login" for="senhaUser">Senha</label>
            </div>
            {{-- Confirmar senha --}}
            <div class="form-floating mb-4">
                <input type="password" class="form-control input-login" id="confSenhaUser" placeholder="Confirme sua senha">
                <label class="label-login" for="confSenhaUser">Confirme sua senha</label>
            </div>

            {{-- Botão de enviar --}}
            <button class="btn btn-primary btn-lg mb-2" type="submit">Criar conta</button>

            {{-- Link para login --}}
            <p class="card-link" style="color: var(--white)">Já tem uma conta? Entre 
                <a href="/login">aqui.<a>
            </p>
        </form>
    </div>
</div> {{-- Fim do card login --}}
@endsection
