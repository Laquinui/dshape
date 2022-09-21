@extends('/layouts/main')

@section('container')

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="text-center p-4">
                <h1 class="mb-3 text-white">DSHAPE</h1>
                <p class="lead text-white">Cadastrar as medidas do seu corpo nunca foi tão fácil.</p>
            </div>
            
        </div>
    </div>

    <h1> Home </h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/measurements">
                    <button type="button" class="btn btn-primary">Medidas cadastradas</button>
                </a>
                
            </div>

            <div class="col-md-6">
                <a href="/measurements/new">
                    <button type="button" class="btn btn-primary">Novas medidas</button>
                </a>
                
            </div>
        </div>
    </div>
@endsection