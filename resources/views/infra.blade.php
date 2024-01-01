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
    <link href="{{ asset('css/infra.css') }}" type="text/css"  rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" type="text/css"  rel="stylesheet">
</head>
<body>
    <script>
        function logout(){
            window.location.href = '/logout'
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
                       <button class="btn btn-primary mb-3 " >Voltar</button>
                       <button class="btn btn-primary mb-2 " >Serviços</button>
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
                         <th class="text-center" style="width: 11%" >Hostname</th>
                         <th class="text-center" style="width: 11%" >Anydesk</th>
                         <th class="text-center" style="width: 11%" >IP</th>
                         <th class="text-center" style="width: 11%" >Servidor</th> 
                         <th class="text-center" style="width: 11%" >Emissor</th>
                         <th class="text-center" style="width: 11%" >Caixa</th>
                         <th class="text-center" style="width: 11%" >XML</th>
                         <th class="text-center" style="width: 11%" >Status</th>
                         <th class="text-center" style="width: 11%" >Detalhes</th>
                     </tr>
                 </thead>
                   <tbody>
                        
                    @foreach(Session::get('infra') as $pc)  
                    <tr>
                      <th class="text-center" style="width: 11%" >{{$pc->Hostname}}</th>
                      <th class="text-center" style="width: 11%" >{{$pc->Anydesk}}</th>
                      <th class="text-center"style="width: 11%">{{$pc->IP}}</th>
                      <th class="text-center" style="width: 11%" >
                     @if ($pc->Servidor == 1)
                         <span>Sim</span>
  
                     @else
                         <span>Não</span>
                     @endif  
                    </th>
                     
                     <th class="text-center" style="width: 11%" >
                       @if ($pc->Emissor == 1)
                        <span>Sim</span>
  
                       @else
                      
                         <span>Não</span>
                       @endif  
                   
                   
                   
                    </th>
                     
                     <th class="text-center"style="width: 11%">
                     @if ($pc->Caixa == 1)
                         <span>Sim</span>
  
                     @else
                        <span>Não</span>
                     @endif  
                   
                   
                    </th>
                     
                     <th class="text-center" style="width: 11%" >
                       @if ($pc->Caixa == 1)
                       <button class="btn btn-outline-dark">Baixar</button></th>
  
                     @else
                        <button class="btn btn-outline-dark" disabled >Baixar</button></th>
                     @endif 
                       
                       
                      
                     
                     
                     <th class="text-center"style="width: 11%">
                      @if ($pc->Status == 1)
                        <span>OFF</span>
                      @else
                        <span>ON</span>
                      @endif  
                   
                   
                     </th>
                     
                     
                     <th class="text-center"style="width: 11%">
                      <button class="btn btn-outline-dark">Visualizar</button></th>
                   
                     </th> 




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
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    




</body>
</html>