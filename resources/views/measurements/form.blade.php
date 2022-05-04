@extends('/layouts/main')

@section('container')
    <h1> Form </h1>

   <div class="container">
       <div class="row">
           <div class="col">
               <div class="card">
                   <div class="card-header">
                        <h1>Cadastrar</h1>
                   </div> <!-- Fim do card header -->
                   <div class="card-body">
                       <form action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                       </form>
                   </div> <!-- Fim do card body -->
               </div> <!-- Fim do card -->
           </div> <!-- Fim da col -->
       </div> <!-- Fim da row -->
   </div> <!-- Fim do container -->
    
@endsection