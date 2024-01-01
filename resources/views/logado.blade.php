<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{asset('css/logado.css')}}" type="text/css" rel="stylesheet"  >
    <link href="{{asset('css/menu.css')}}" type="text/css" rel="stylesheet"  >
   
   
    <title>Portal</title>
   
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
                    <li><a href="/logado" class="nav-link menuitem rotaativa "><span style="margin-left:10px">Home</span></a></li>
                    <li><a href="/clientes" class="nav-link menuitem"><span style="margin-left:10px">Clientes</span></a></li>
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
        <div class="container-fluid "  style="border-bottom:2px solid black; height:10%;  padding:0; background-color:  #FFCC00 " >
            <div class="identifica">
                <div class="row" style="width: 100%; background-color:white; padding: 0; ">
                    <div class="col-10" style="text-align:left; padding:0;" >
                       <h1 style="margin-top: 1%; margin-left:1%" >Home</h1>
                    </div>
      
                    <div class="col-2 bg-dark "  >
                        <div class="row" style="height: 100%;" >
                          <div class="usuario">
                              <div class="col-8" style="text-align: right; color:white " > <span> {{session('user')}} </span></div>
                              <div class="col-4 text-end "  > <img src="https://projetokilberty.blob.core.windows.net/sftp/imagens/softcom_perfil.jpg" class="rounded-circle" style="height:40px"  > </div>
                          </div>
                        </div> 
                
                
                </div>






    </div>
    
  
</body>
</html>