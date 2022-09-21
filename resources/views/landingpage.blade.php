@extends('/layouts/main')

@section('container')

{{-- HEADER --}}
<div class="container-fluid p-3 mb-5 header">
    <div class="row align-items-center">
        <div class="col-5 text-center">
            <img class="dshape-logo mb-2" src="{{asset('img/dshape_logo.svg')}}" alt="Dshape">
            <h3 class="mb-3" style="color: var(--secundary-dark);">
                Cadastrar suas medidas nunca foi tão fácil.
            </h3>
            <a href="/measurements/new" class="btn btn-primary" role="button">Comece agora</a>
        </div>
        <div class="col-7 text-center">
            <img class="img-header" src="{{asset('img/woman_running.svg')}}" alt="Ilustração de uma mulher correndo e olhando em seu smartwatch.">
        </div>
    </div>
</div>

{{-- INFORMAÇÕES SOBRE O SITE --}}
<div class="container" id="infos-area">
    <div class="row" style="color: var(--white);">

        {{-- Cadastro rápido --}}
        <div class="col-4 text-center">
            <h4 class="text-uppercase">Cadastro rápido</h4>
            <button class="btn btn-secundary btn-infs" type="button" data-bs-target="#carouselInfos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
            </button>
            <div class="card card-body card-infos mx-auto" style="width: 250px;">
                <p class="fs-5">Guarde e edite suas informações de forma simples e prática</p>
            </div>
        </div>

        {{-- Avanço --}}
        <div class="col-4 text-center justify-content-center">
            <h4 class="text-uppercase">Avanço notável</h4>
            <button class="btn btn-secundary btn-infs" type="button" data-bs-target="#carouselInfos" data-bs-slide-to="1" aria-label="Slide 2">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                </svg>
            </button>
            <div class="card card-body card-infos mx-auto" style="width: 250px;">
                <p class="fs-5">Veja seu avanço por meio de gráficos</p>
            </div>
        </div>

        {{-- Metas --}}
        <div class="col-4 text-center">
            <h4 class="text-uppercase">Metas</h4>
            <button class="btn btn-secundary btn-infs" type="button" data-bs-target="#carouselInfos" data-bs-slide-to="2" aria-label="Slide 3">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
            </button>
            <div class="card card-body card-infos mx-auto" style="width: 250px;">
                <p class="fs-5">Marque seu estágio atual e estabeleca metas a cumprir</p>
            </div>
        </div>

    </div> {{-- Fim da row de infos --}}
    <div id="carouselInfos" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/form-person.svg')}}" class="d-block img-info mx-auto" alt="Ilustração de uma pessoa se cadastrando.">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/graphic-person.svg')}}" class="d-block img-info mx-auto" alt="Ilustração de uma pessoa com gráficos.">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/goal-people.svg')}}" class="d-block img-info mx-auto" alt="Ilustração de duas pessoas fazendo exercícios físicos.">
            </div>
        </div>
    </div>
</div>

{{-- ÁREA DE COMENTÁRIOS --}}
<div class="container-fluid" style="background-color: var(--white);" id="comment-area">
    <div class="row">
        
    </div>
</div>

{{-- LOGIN --}}
<div id="login-area" class="position-relative">
    <div class="container">
        <div class="row text-center position-absolute top-50 start-50 translate-middle">
            <h2 class="text-uppercase mt-4 mb-4" style="color: var(--white)">Comece agora</h2>
            <div class="card mx-auto card-login">
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
                            <a href="/login" style="color: var(--primary); text-decoration: none;">aqui.<a>
                        </p>
                    </form>
                </div>
            </div> {{-- Fim do card login --}}
        </div> {{-- Fim da row --}}
    </div> {{-- Fim do container --}}
</div> {{-- Fim da área de login --}}

@endsection