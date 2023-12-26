<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="{{asset('css/infra.css')}}" rel="stylesheet"  >
</head>
<body>
    <script>
        function logout(){
            window.location.href = '/logout'
        }
    </script>
   
    <div class="box">
        <div class="menu bg-dark ">
            <nav>
                <ul class="navbar-nav sidebar sidebar-dark accordion">
                    <li><a href="/logado" style="color:white;" class="nav-link" >Home</a></li>
                    <li><a href="/clientes" style="color: white"  class="nav-link ultitem  ">Clientes</a> </li>
                    <button style="width: 100%; border:none; color:white; " type="button"  onclick="logout()" class="btn btn-primary bg-dark" > Logout</button>
                </ul>
            </nav>
        </div>
    
      
      <div class="boxmain">
        <div class="info" style="width: 100%" >
            <div class="row" style="width: 100%; margin-left: 1%; margin-top:1%; " >
               <div class="col-4"> <span>Nome : {{session('cliente')}}</span>  </div>
               <div class="col-2"> <span>CNPJ : {{session('cnpj')}} </span> </div>
            </div>
        </div>
       <div class="main">
         <div class="divTabela">
            <table class="table table-bordered table-responsive ">
                <thead>
                    <tr>
                        <th class="text-center">Hostname</th>
                        <th class="text-center">Anydesk</th>
                        <th class="text-center">Senha</th>
                        <th class="text-center">IP</th>
                        <th class="text-center">Servidor</th>
                        <th class="text-center">Emissor</th>
                        <th class="text-center">Caixa</th>
                        <th class="text-center" >XML</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                  <tbody>
                      <tr>
                          <th class="text-center" style="width: 12%" >DESKTOP-I9IVC7U</th>
                          <th class="text-center" style="width: 7%" >342658509</th>
                          <th class="text-center"style="width: 7%">Sfc@11</th>
                          <th class="text-center"style="width: 10%">192.168.15.2</th>
                          <th class="text-center" style="width: 10%" >Sim</th>
                          <th class="text-center" style="width: 10%" >Sim</th>
                          <th class="text-center"style="width: 10%">Não</th>
                          <th class="text-center" style="width: 10%" ><button class="btn btn-outline-dark" disabled >Baixar</button></th>
                          <th class="text-center"style="width: 10%">ON</th>  
                      </tr>  
                  
                      <tr>
                        <th class="text-center"   >DESKTOP-I5IVC7U</th>
                        <th class="text-center">342654509</th>
                        <th class="text-center">Sfc@11</th>
                        <th class="text-center">192.168.15.3</th>
                        <th class="text-center">Não</th>
                        <th class="text-center">Sim</th>
                        <th class="text-center">Sim</th>
                        <th class="text-center"  ><button class="btn btn-outline-dark">Baixar</button></th>
                        <th class="text-center">OFF</th>  
                    </tr>  
                  
                  
                  
                  
                  
                  
                  
                    </tbody>   
             


         </div>    



       </div>

      </div>  


     
   
    
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>




</body>
</html>