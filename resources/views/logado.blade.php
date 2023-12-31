<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="{{asset('css/logado.css')}}" type="text/css" rel="stylesheet"  >
   
   
    <title>Portal</title>
   
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
                <div class="row " style="margin-top: 10%; margin-bottom:10%" >
                    <div class="col">
                        <img src="https://projetokilberty.blob.core.windows.net/sftp/imagens/logo_softcom_branca.png" style="width: 180px; heigth:50px;">
                    </div>
                </div>
                
                <ul class="navbar-nav sidebar sidebar-dark accordion">
                    <li><a href="/logado" style="color:white;" class="nav-link" >Home</a></li>
                    <li><a href="/clientes" style="color: white"  class="nav-link   ">Clientes</a> </li>
                    <li> <a href="/clientes" href="/clientes" style="color:white" class="nav-link" >NFS-e</a> </li>
                    <li> <a href="/clientes" style="color: white" class="nav-link ultitem" >Meu Carrinho</a></li>
                    <button style="width: 100%; border:none; color:white; " type="button"  onclick="logout()" class="btn btn-primary bg-dark" > Logout</button>
                </ul>
            </nav>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>