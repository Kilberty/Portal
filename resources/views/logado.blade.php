<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seu Título Aqui</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Seu arquivo CSS personalizado -->
    <link href="{{asset('css/logado.css')}}" type="text/css" rel="stylesheet">

   
   
    <title>Portal</title>
   
</head>
<body>
    <script>
        function logout(){
            window.location.href = '/logout'
        }
    </script>
   

    <div class="box ">
        <div class="row" style="width: 100%" >
            <div class="col-4">
               <div class="CaixaOcorrencia " style="margin-left: 1%" >
                    <div class="Ocorrencias">
                         <div class="OcorrenciasHeader">
                            <h2>Atividades</h2>
                         </div>
                  
                       <div class="OcorrenciasMain">
                         <div class="OcorrenciasLista">
                           <a href="#">FRONT-END</a>
                           <a href="#">BACK-END</a>
                           <a href="#">BANCO DE DADOS</a>
                           <a href="#">TESTE</a>
                         </div>  
                    
                       </div>

                  
                  
                  
                  
                  
                  
                    </div>
               
                  <div class="OcorrenciasAndamento" style="margin-top: 2%" >
                          <div class="AndamentoHeader">
                               <h2>Iniciadas</h2>
                           </div>

                           <div class="AndamentoMain">
                              <div class="AndamentoLista">
                                <a href="#">FRONT-END</a>
                                <a href="#">BACK-END</a>
                                <a href="#">BANCO DE DADOS</a>
                                <a href="#">TESTE</a>             
                              </div>
                           </div>
                  
                    </div>
               
               
               
                </div>
              

            </div>
            <div class="col-8">
              <div class="main">
                  <div class="menu">
                    <div class="row" style="margin-left:1%" >
                        <div class="col botoes">
                            <button class="btn btn-outline-dark" style="height: 80px;">
                                <img src="{{asset('images/Atualizar.png')}}"  >
                            </button>
                       
                            <span>Atualizar</span>
                        </div>
                        <div class="col botoes ">
                            <button class="btn btn-outline-dark" style="height: 80px" > 
                                <img src="{{asset('images/New.png')}}"  >
                            </button>
                            <span>Atividade</span>
                        </div>
                        <div class="col botoes ">
                            <button class="btn btn-outline-dark" style="height: 80px" > 
                                <img src="{{asset('images/New.png')}}"  >
                            </button>
                            <span>Reuniões</span>
                        </div>
                        <div class="col botoes ">
                            <button class="btn btn-outline-dark" style="height: 80px" > 
                                <img src="{{asset('images/calendar.png')}}"  >
                            </button>
                            <span>Calendário</span>
                        </div>
                        <div class="col botoes ">
                            <button class="btn btn-outline-dark" style="height: 80px" > 
                                <img src="{{asset('images/calendar.png')}}"  >
                            </button>
                            <span>Hoje</span>
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
                            <h5>Bem Vindo, {{session('user')}}</h5>
                            <button class="btn btn-dark" type="button" onclick="logout()"  >Logout</button>
                         </div>
                       </div>
                    
                    </div>
                </div>
            
            
            </div>
            
        </div>



    </div>





  
  
</body>
</html>