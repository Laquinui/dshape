@extends('/layouts/main')

@section('container')
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