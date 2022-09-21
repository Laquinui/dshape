@extends('/layouts/main')

@section('container')

   <div class="container">
       <div class="row">
           <div class="col-12">
               <a href="/">← Voltar</a>
           </div>
           
           <div class="col-12">
               <div class="card">
                   <div class="card-header bg-danger text-light px-4 py-3">
                        <h1>Medidas cadastradas</h1>
                   </div> {{-- Fim do card header --}}
                   <div class="card-body">
                        <div class="container px-5 my-5">
                            
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ações</th>
                                  </tr>
                                </thead>
                                <tbody>

                                    @if ($measurements->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">Nenhuma medida cadastrada</td>
                                        </tr>
                                    @else

                                    @foreach ($measurements as $measurement)
                                    <tr>
                                        <th scope="row">{{$measurement->id}}</th>
                                        <td>{{$measurement->date}}</td>
                                        <td>
                                            <a href="/measurements/{{$measurement->id}}" class="btn btn-primary" role="button">Editar</a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmationModal"  data-measurement-id="{{$measurement->id}}">
                                                Excluir
                                            </button>
                                        </td>
                                      </tr>
                                    @endforeach

                                    @endif
                                  
                                </tbody>
                              </table>

                        </div>
                        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                   </div> {{-- Fim do card body --}}
               </div> {{-- Fim do card --}}
           </div> {{-- Fim da col --}}
       </div> {{-- Fim da row --}}
   </div> {{-- Fim do container --}}
      
    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Atenção!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>deseja excluir essa medida?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="" method="POST" id="formDeleteMeasurements">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        //variável local que recebe o elemento html (Modal)
        const confirmationModal = document.getElementById('confirmationModal');

        //adiciona um evento, toda vez que o modal for aberto
        confirmationModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Variável para o botão 
            const form = document.getElementById('formDeleteMeasurements');

            form.action = "/measurements/" + button.getAttribute('data-measurement-id');
        });

    </script>
    
@endsection
