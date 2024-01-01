<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/infra.css') }}" type="text/css"  rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" type="text/css"  rel="stylesheet">
</head>
<body>
    <script>
        function logout(){
            window.location.href = '/logout'
        }
   
        function voltar(){
            window.location.href = '/clientes'
        }
   
   
   
    </script>
   
   <div class="box">
      <div class="menu  " style="background-color:black "  >
        <nav>
            <div class="row " style="margin-top: 10%; margin-bottom:10%; "  >
                <div class="col">
                    <img src="https://projetokilberty.blob.core.windows.net/sftp/imagens/logo_softcom_branca.png" style="width: 180px; heigth:50px;">
                </div>
            </div>
            
            
            <ul class="navbar-nav sidebar sidebar-dark accordion">
                <li><a href="/logado" class="nav-link menuitem"><span style="margin-left:10px">Home</span></a></li>
                <li><a href="/clientes" class="nav-link menuitem rotaativa"><span style="margin-left:10px">Clientes</span></a></li>
                <li>
                    <a class="nav-link menuitem" data-toggle="collapse" href="#menunfse">
                        <span style="margin-left: 10px; "  >NFS-e</span>
                    </a>
                    <div id="menunfse" class="collapse">
                        <ul>
                            <li>
                                <a href="" class="nav-link menuitem">
                                    <span style="margin-left: 10px">Recuperar XML</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="" class="nav-link menuitem">
                                    <span style="margin-left: 10px">Comparar XML</span>
                                </a>
                            </li>
                        
                        
                        
                        </ul>
                    </div>
                </li>
                <li><a href="/clientes" class="nav-link menuitem"><span style="margin-left:10px">Meu Carrinho</span></a></li>
               
            </ul>
        </nav>
       
        <div class="divLogout">
           <div class="row" style="height: 100%">
               <div class="col" style="height: 100%">
                <button style="width: 100%; border:none; border-radius:0px; color:white;  height:100%"  onclick="logout()"   class="btn btn-dark" > Logout</button>

               </div>
        
           </div>  
        </div>
             
     </div>
    
      <div class="main">
       <div class="container-fluid bg-dark" style="height:15%;" >
        
               <div class="row" style="width: 100%; height:100%" >
                  <div class="col-10" style="background-color:white">
                    <div class="row">
                      <div class="col mt-3 "><span>Nome : {{session('cliente')}}</span></div>
                      <div class="col mt-3 "> <span>CNPJ : {{session('cnpj')}}</span> </div>
                    </div>
                    
             
                  
                  
                  </div>
                  <div class="col-2 bg-dark " style="padding-right:0px; display:flex;" >
                     <div class="botoes">
                       <button class="btn btn-primary" type="button"  style="margin-top: 2%" onclick="voltar()"  >Voltar</button>
                       <div class="dropdown botoes"  >
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Serviços
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Produtos do Cliente</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Backup Cloud</a></li>
                          <li><a class="dropdown-item" href="#">Nuvem Fiscal</a></li>
                          <li><a class="dropdown-item" href="#">Pix</a></li>
                        </ul>
                      </div>
                     </div>
                  
                  </div> 
               </div>
        </div>
       
        <div class="modal fade" id="exampleModal"   data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <h6 class="card-title" >TEF</h6>
                               <div class="row">
                                <div class="col"><span>Situação : Instalado</span></div>
                                <div class="col"> <span>Chave/Checkout : 21BCA</span></div>
                               </div>
                                <div class="row" style="margin-top:3%" >
                                    <div class="col">Tipo : SITEF</div>
                                </div>
                            </li>
                    
                         
                        </ul>
                       
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
              </div>
            </div>
          </div>


       <div class="page">
           <div class="lista">
            <div class="tabela">
              <div class="table-responsive" style="width: 98%"  >
                <table class="table table-bordered ">
                 <thead>
                     <tr>
                         <th class="text-center" style="width: 10%" >Hostname</th>
                         <th class="text-center" style="width: 10%" >Anydesk</th>
                         <th class="text-center" style="width: 10%" >IP</th>
                         <th class="text-center" style="width: 10%" >Servidor</th> 
                         <th class="text-center" style="width: 10%" >Emissor</th>
                         <th class="text-center" style="width: 10%" >Caixa</th>
                         <th class="text-center" style="width: 10%" >XML</th>
                         <th class="text-center" style="width: 10%" >Status</th>
                         <th class="text-center" style="width: 10%" >Detalhes</th>
                         <th class="text-center" style="width: 10%" >Config</th>
                     </tr>
                 </thead>
                   <tbody>
                        
                    @foreach(Session::get('infra') as $pc)  
                    <tr>
                      <th class="text-center" style="width: 10%" >{{$pc->Hostname}}</th>
                      <th class="text-center" style="width: 10%" >{{$pc->Anydesk}}</th>
                      <th class="text-center"style="width: 10%">{{$pc->IP}}</th>
                      <th class="text-center" style="width: 10%" >
                     @if ($pc->Servidor == 1)
                         <span>Sim</span>
  
                     @else
                         <span>Não</span>
                     @endif  
                    </th>
                     
                     <th class="text-center" style="width: 10%" >
                       @if ($pc->Emissor == 1)
                        <span>Sim</span>
  
                       @else
                      
                         <span>Não</span>
                       @endif  
                   
                   
                   
                    </th>
                     
                     <th class="text-center"style="width: 10%">
                     @if ($pc->Caixa == 1)
                         <span>Sim</span>
  
                     @else
                        <span>Não</span>
                     @endif  
                   
                   
                    </th>
                     
                     <th class="text-center" style="width: 10%" >
                       @if ($pc->Caixa == 1)
                       <button class="btn btn-outline-dark">Baixar</button></th>
  
                     @else
                        <button class="btn btn-outline-dark" disabled >Baixar</button></th>
                     @endif 
                       
                       
                      
                     
                     
                     <th class="text-center"style="width: 10%">
                      @if ($pc->Ligado == 1)
                        <span>ON</span>
                      @else
                        <span>OFF</span>
                      @endif  
                   
                   
                     </th>
                     
                     
                     <th class="text-center"style="width: 10%">
                      <button class="btn btn-outline-dark" type="button"  data-toggle="modal" data-target="#exampleModal"  >Visualizar</button></th>
                   
                     </th> 

                     <th class="text-center" style="width: 10%" >
                        @if ($pc->Caixa == 1)
                        <button class="btn btn-outline-dark">Configurar</button></th>
   
                      @else
                         <button class="btn btn-outline-dark" disabled >Configurar</button></th>
                      @endif 
                        


                 </tr>  
                @endforeach
                    
                    
  
  
  
                   </tbody>   
                   <script>
                   
                   </script>
  
                 </table>
             </div>
              
            
            
            
             </div> 
  
  
  
            </div>
            
       </div>
        
      
      
      
      </div>
   

     
   
    
    
    </div>
    
    

  
  
  



</body>
</html>