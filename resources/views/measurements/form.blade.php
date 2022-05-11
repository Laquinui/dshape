@extends('/layouts/main')

@section('container')

   <div class="container">
       <div class="row">
           <div class="col-12">
               <a href="/">Voltar</a>
           </div>
           <div class="col-12">
               <div class="card">
                   <div class="card-header bg-danger text-light px-4 py-3">
                        <h1>Cadastrar</h1>
                   </div> {{-- Fim do card header --}}
                   <div class="card-body">
                        <div class="container px-5 my-5">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                                {{-- Peso --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="pesoKg" type="text" placeholder="Peso (kg)" data-sb-validations="required" />
                                    <label for="pesoKg">Peso (kg)</label>
                                    <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso (kg) é obrigatório.</div>
                                </div>

                                {{-- Altura --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="alturaCm" type="text" placeholder="Altura (cm)" data-sb-validations="required" />
                                    <label for="alturaCm">Altura (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura (cm) é obrigatório.</div>
                                </div>

                                {{-- Peitoral --}}                           
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral (cm)" data-sb-validations="" />
                                    <label for="peitoralCm">Peitoral (cm)</label>
                                </div>

                                {{-- Braço esquerdo --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço esquerdo (cm)" data-sb-validations="" />
                                    <label for="bracoEsquerdoCm">Braço esquerdo (cm)</label>
                                </div>

                                {{-- Braço direito --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço direito (cm)" data-sb-validations="" />
                                    <label for="bracoDireitoCm">Braço direito (cm)</label>
                                </div>

                                {{-- Abdômen --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen (cm)" data-sb-validations="" />
                                    <label for="abdomenCm">Abdômen (cm)</label>
                                </div>

                                {{-- Cintura --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura (cm)" data-sb-validations="" />
                                    <label for="cinturaCm">Cintura (cm)</label>
                                </div>

                                {{-- Quadril --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril (cm)" data-sb-validations="" />
                                    <label for="quadrilCm">Quadril (cm)</label>
                                </div>

                                {{-- Coxa esquerda --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa esquerda (cm)" data-sb-validations="" />
                                    <label for="coxaEsquerdaCm">Coxa esquerda (cm)</label>
                                </div>

                                {{-- Coxa direita --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa direita (cm)" data-sb-validations="" />
                                    <label for="coxaDireitaCm">Coxa direita (cm)</label>
                                </div>

                                {{-- Panturrilha esquerda --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha esquerda (cm)" data-sb-validations="" />
                                    <label for="panturrilhaEsquerdaCm">Panturrilha esquerda (cm)</label>
                                </div>

                                {{-- Panturrilha direita --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha direita (cm)" data-sb-validations="" />
                                    <label for="panturrilhaDireitaCm">Panturrilha direita (cm)</label>
                                </div>

                                {{-- Mensagem de enviado com sucesso --}}
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Enviado com sucesso!</div>
                                    </div>
                                </div>

                                {{-- Mensagem de erro ao enviar --}}
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Erro em enviar!</div>
                                </div>

                                {{-- Botão de enviar --}}
                                <div class="d-flex">
                                    <button class="btn btn-danger btn-lg disabled flex-fill m-3" id="submitButton" type="submit">Limpar</button>
                                    <button class="btn btn-primary btn-lg disabled flex-fill m-3" id="submitButton" type="submit">Enviar</button>
                                </div>

                            </form>
                        </div>
                        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                   </div> {{-- Fim do card body --}}
               </div> {{-- Fim do card --}}
           </div> {{-- Fim da col --}}
       </div> {{-- Fim da row --}}
   </div> {{-- Fim do container --}}
    
@endsection