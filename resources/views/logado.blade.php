<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('css/logado.css')}}" type="text/css" rel="stylesheet">
    <title>Portal</title>
</head>

<body>
    <script>
     function logout() {
        window.location.href = '/logout'
    }
    
    function BuscaDia(){
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    $.ajax({
        url: "/BuscaOcorrencia",
        type: "POST",
        data: {
            _token: csrfToken,
            Data : document.getElementById('Data').value
        },
        success: function(response) {
            location.reload();
        },
    })
    } 
    
    function Hoje() {
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var DataAtual = new Date();
    var Ano = DataAtual.getFullYear();
    var Mes = DataAtual.getMonth() + 1;
    var Dia = DataAtual.getDate();
    var DataFormatada = Ano + '-' + Mes.toString().padStart(2, '0') + '-' + Dia.toString().padStart(2, '0');
    $.ajax({
        url: "/DataOcorrencia",
        type: "POST",
        data: {
            _token: csrfToken,
            Data: DataFormatada
        },
        success: function(response) {
            location.reload();
        },
    });}

    function ModalOcorrenciaData(){
        var DataAtual = new Date();
        var Ano = DataAtual.getFullYear();
        var Mes = DataAtual.getMonth() + 1;
        var Dia = DataAtual.getDate();
        var DataFormatada = Ano + '-' + Mes.toString().padStart(2, '0') + '-' + Dia.toString().padStart(2, '0');
        document.getElementById('retornoInput').value = DataFormatada;
    }
    
    
    function HoraChegada(){
        var Chegada = document.getElementById("Chegada");
        if (!Chegada.value.trim()) { // Verifica se o valor do campo está vazio ou contém apenas espaços em branco
         var data = new Date();
         var Hora = data.getHours();
         var Minutos = data.getMinutes();

         Hora = Hora < 10 ? '0' + Hora : Hora;
         Minutos = Minutos < 10 ? '0' + Minutos : Minutos;

         Chegada.value = Hora + ":"+Minutos;
    }
    }
    
    function FormatarHoraChegada() {
        var horaInput = document.getElementById("Chegada");
        var hora = horaInput.value;

    // Remove caracteres não numéricos
         hora = hora.replace(/\D/g, '');

    // Adiciona os dois pontos após digitar dois números
          if (hora.length > 2) {
            hora = hora.substring(0, 2) + ":" + hora.substring(2);
        }

    // Limita o tamanho do campo a 5 caracteres
           hora = hora.substring(0, 5);

    // Atualiza o valor do campo de entrada
           horaInput.value = hora;
    }
    
    function FormatarHoraSaida() {
        var horaInput = document.getElementById("Saida");
        var hora = horaInput.value;

    // Remove caracteres não numéricos
         hora = hora.replace(/\D/g, '');

    // Adiciona os dois pontos após digitar dois números
          if (hora.length > 2) {
            hora = hora.substring(0, 2) + ":" + hora.substring(2);
        }

    // Limita o tamanho do campo a 5 caracteres
           hora = hora.substring(0, 5);

    // Atualiza o valor do campo de entrada
           horaInput.value = hora;
    }
    
    
    function HoraSaida(){  
        var Saida = document.getElementById("Saida");
        if (!Saida.value.trim()) { // Verifica se o valor do campo está vazio ou contém apenas espaços em branco
         var data = new Date();
         var Hora = data.getHours();
         var Minutos = data.getMinutes();

         Hora = Hora < 10 ? '0' + Hora : Hora;
         Minutos = Minutos < 10 ? '0' + Minutos : Minutos;

         Saida.value = Hora + ":"+Minutos;
         if(!Chegada.value.trim()){
            Chegada.value = Hora + ":"+Minutos
         }
        }
    }

    
      
    
    document.addEventListener('DOMContentLoaded', function() {
        ModalOcorrenciaData();
        var form = document.getElementById('ocorrenciaForm');
    var modal = document.getElementById('CreateOcorrencia');

    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault(); // Impede o envio do formulário se não for válido
        event.stopPropagation();
      } else {
        // Se o formulário for válido, feche o modal
        var bsModal = new bootstrap.Modal(modal);
        bsModal.hide();
      }

      // Adiciona a classe 'was-validated' ao formulário para mostrar os estilos de validação do Bootstrap
      form.classList.add('was-validated');
    });
  }); 
   
   
    window.onload = function() {        
      $data = document.getElementById('DataSessao').value;
      $.ajax({
        url: "/DataOcorrencia",
        type: "POST",
        data: {
            _token: csrfToken,
            Data: $data
        },
        success: function(response) {
            location.reload();
        },
    })
    }




</script>
    <div class="box ">
        <input type="hidden" id="DataSessao" value="{{Session::get('data')}}">
        <div class="row" style="width: 100%">
            <div class="col-4">
                <div class="CaixaOcorrencia " style="margin-left: 1%">
                    <div class="Ocorrencias">
                        <div class="OcorrenciasHeader">
                            <h2>Atividades</h2>
                        </div>
                        <div class="OcorrenciasMain">
                            <div class="OcorrenciasLista">
                                <div class="AndamentoLista">
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Atendimento</th>
                                                <th class="text-center">Inicio</th>
                                                <th class="text-center">Fim</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach(Session::get('Atividades') as $Atividades)
                                            <tr>
                                                <th class="text-center"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{$Atividades->tipoOcorrencia.Atividade_Descri}}</a></th>
                                                    <th class="text-center">$Atividades->HoraChegada</th>
                                                    <th class="text-center">$Atividades->HoraSaida</th>
                                              </tr>
                                            @endforeach
                                            <div class="modal fade  modal-xl" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="staticBackdropLabel">Front</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <div class="Servico">
                                                         <div class="row ColaboradoresOcorrencia">
                                                            <div class="col-2">
                                                                <h5 class="modal-title">Descrição</h5>
                                                            </div>
                                                          <div class="col-10">
                                                            <div class="d-flex flex-row-reverse ">
                                                                <div class="col-2">
                                                                    <div class="form-group" aria-autocomplete="off" >
                                                                     <label for="DEV">DEV:</label>
                                                                     <select class="form-select" id="TipoOC" name="TipoOC" >
                                                                          @foreach(Session::get('DEVS') as $dev)
                                                                            <option value={{$dev->id}}>{{$dev->Usuario}}</option>
                                                                          @endforeach  
                                                                      </select>  
                                                                    </div>
                                                               </div>
                                                                 
                                                               <div class="col-1"></div>
                                                               <div class="col-2">
                                                                 <div class="form-group">
                                                                     <label for="Criada">Criada:</label>
                                                                     <input type="text" disabled class="form-control" id="Criada">
                                                                   </div>
                                                               </div>
                                                           
                                                                 <div class="col-1"></div>
                                                                 <div class="col-2">
                                                                   <div class="form-group">
                                                                       <label for="Data_Criacao">Data de Criação:</label>
                                                                       <input type="date" disabled class="form-control" id="Data_Criacao">
                                                                     </div>
                                                                 </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="Descricao">
                                                            <textarea name="Descri" class="form-control"  id="Descri" cols="30" rows="10"></textarea>
                                                        </div>
                                                        
                                                        
                                                      </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <div class="Servico">
                                                        <div class="row HorariosServico "  >
                                                            <div class="col-2">
                                                                <h5 class="modal-title">Serviço Realizado</h5>
                                                            </div>
                                                        
                                                            <div class="col-10">
                                                                  <div class="d-flex flex-row-reverse">
                                                                      <div class="col-2">
                                                                           <div class="form-group">
                                                                            <label for="Saida">Fim:</label>
                                                                            <input type="text" class="form-control" oninput="FormatarHoraSaida()"  onclick="HoraSaida()" id="Saida">
                                                                          </div>
                                                                      </div>
                                                                        
                                                                      <div class="col-1"></div>
                                                                      <div class="col-2">
                                                                        <div class="form-group">
                                                                            <label for="Chegada">Início:</label>
                                                                            <input type="text" class="form-control"  oninput="FormatarHoraChegada()"  onclick="HoraChegada()" id="Chegada">
                                                                          </div>
                                                                        </div>
                                                                  
                                                                        <div class="col-1"></div>
                                                                        <div class="col-2">
                                                                          <div class="form-group">
                                                                              <label for="Data_Conclusao">Data de Conclusão:</label>
                                                                              <input type="date" class="form-control" id="Data_Conclusao">
                                                                            </div>
                                                                        </div>
                                                                  </div> 
                                                            </div>
                                                        </div>
                                                        <div class="Descricao">
                                                            <textarea name="Descri" class="form-control" id="Servico" cols="30" rows="10"></textarea>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="OcorrenciasAndamento" style="margin-top: 2%">
                        <div class="AndamentoHeader">
                            <h2>Iniciadas</h2>
                        </div>
                        <div class="AndamentoMain">
                            <div class="AndamentoLista">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Atendimento</th>
                                            <th class="text-center">User</th>
                                            <th class="text-center">SLA</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="main">
                    <div class="menu">
                        <div class="row" style="margin-left:1%">
                            <div class="col botoes">
                                <button class="btn btn-outline-primary" style="height: 80px;">
                                    <img src="{{asset('images/Atualizar.png')}}">
                                </button>
                                <span>Atualizar</span>
                            </div>
                            <div class="col botoes ">
                                <button class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#CreateOcorrencia" style="height: 80px">
                                    <img src="{{asset('images/New.png')}}">
                                </button>
                                <span>Atividade</span>
                            </div>
                            <div class="col botoes ">
                                <button class="btn btn-outline-primary"  style="height: 80px">
                                    <img src="{{asset('images/New.png')}}">
                                </button>
                                <span>Reuniões</span>
                            </div>
                            <div class="col botoes ">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#BuscaData"  style="height: 80px">
                                    <img src="{{asset('images/calendar.png')}}">
                                </button>
                                <span>Calendário</span>
                            </div>
                            <div class="col botoes ">
                                <button class="btn btn-outline-primary" onclick="Hoje()"  style="height: 80px">
                                    <img src="{{asset('images/calendar.png')}}">
                                </button>
                                <span>Hoje</span>
                            </div>
                        
                            <div class="col" style="height: 80px;" >
                                <div class="Calendario">
                                  <div class="row">
                                    <div class="col-6">
                                        <div class="CalendarioDiaMes">
                                            <span>{{Session::get('dia')}}</span>
                                            <p id="horaAtual" name="horaAtual" ></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <span>Teste</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="grafico"></div>
                    <div class="BoxBottom">
                        <div class="reunioes">
                            <div class="ReunioesHeader">
                                <h2>Reuniões</h2>
                            </div>
                        </div>
                        <div class="MainBottom">
                            <div class="UserBottom">
                                <h5>Bem Vindo, {{Session('user')}}</h5>
                                <button class="btn btn-dark" type="button" onclick="logout()">Logout</button>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
        
     <div class="modal fade" id="BuscaData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
             <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="DataLabel">Ir para data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="ModalCalendarioBody">
                        <div class="ModalCalendarioMain">
                           <div class="input-group">
                                <input type="date" class="form-control" id="Data" value="{{Session::get('data')}}">
                                <button class="btn btn-outline-primary" onclick="BuscaDia()" data-bs-dismiss="modal"  > Buscar </button>
                             </div>
                         </div>
                      </div>
                  </div>    
             </div>
         </div>
     </div>    
                        
   
        <div class="modal fade modal-lg" id="CreateOcorrencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="OcorrenciaLabel">Criar Atividade</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                        <div class="modal-body">
                            <div class="ModalCreateOcorrencia">
                                <form action="/CreateOcorrencia" method="POST" >
                                  @csrf
                                  <div class="form-group">
                                    <label for="Atividade_Descri">Descrição</label>
                                    <textarea name="Atividade_Descri" id="Atividade_Descri" required class="form-control" cols="30" rows="10"></textarea>
                                  </div> 
                                   <div class="row" style="margin-top: 2vh;" >
                                     <div class="col">   
                                        <div class="form-group">
                                            <label for="Tipo_Ocorrencia">Tipo de Ocorrência :</label>
                                            <select class="form-select" id="TipoOC" name="TipoOC" >
                                                <option selected disabled  value="" >Selecione</option>
                                                  @foreach(Session::get('Ocorrencias') as $tipo)
                                                  <option value={{$tipo->ID}}>{{$tipo->Atividade_Descri}}</option>
                                                  @endforeach  
                                              </select>                                       
                                            </div>
                                     </div>
                                          <div class="col">
                                             <div class="form-group">
                                                  <label for="DevModal">DEV</label>
                                                  <select class="form-select" id="DevModal" name="DevModal" >
                                                    <option selected disabled  value="" >Selecione</option>
                                                      @foreach(Session::get('DEVS') as $dev)
                                                      <option value={{$dev->id}}>{{$dev->Usuario}}</option>
                                                      @endforeach  
                                                  </select>  
                                              </div>
                                         </div>
                                         <div class="col">
                                           <div class="form-group">
                                               <label for="retornoInput">Data</label>
                                               <input type="date" id="retornoInput" name="retornoInput" required class="form-control" >
                                            </div>
                                        </div>
                                    </div>  
                                   
                                    <div class="d-flex flex-row-reverse" style="margin-top: 5vh;" >
                                       <div class="col-2">
                                         <button class="btn btn-outline-primary" type="submit"  style="width: 100px;" >Salvar</button>
                                        </div>   
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        
   
   <script>
         function atualizarHora() {
      var data = new Date();
      var hora = data.getHours();
      var minutos = data.getMinutes();
      var segundos = data.getSeconds();

      // Formata a hora para garantir que tenha dois dígitos
      hora = hora < 10 ? '0' + hora : hora;
      minutos = minutos < 10 ? '0' + minutos : minutos;
      segundos = segundos < 10 ? '0' + segundos : segundos;

      var horaAtual = hora + ':' + minutos + ':' + segundos;

      // Atualiza o conteúdo do elemento com id 'horaAtual'
      document.getElementById('horaAtual').innerHTML = horaAtual;
       }
        setInterval(atualizarHora,1000);
        atualizarHora();
      </script>
    
    
    
    </body>

</html>
