<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet"  >
    
    <title>Login Page</title>
     
</head>
<body>
    
  <div class="box">
        <div class="formBox bg-dark ">
          <div class="loginBox">
            <form method="POST" action="/checalogin" style="width: 100%;heigth:100%;"  >
                @csrf 
                <div class="row" style="margin-bottom: 5%" >
                   <div class="col">
                    <input type="text" style="text-align: center" placeholder="Usuário"  class="form-control" id="usuario" name="usuario">
                   </div>
                    
                </div>
                <div class="row" style="margin-bottom: 5%"  >
                    <div class="col">
                        <input type="password" style="text-align: center" placeholder="Senha" class="form-control" id="senha" name="senha">
                    </div>
                    
                </div>
                
               <div class="row"  > 
                <div class="col text-center ">
                    <button type="submit" class="btn btn-primary btn-block" style="width: 50%" >Login</button>
                </div>
                
               </div> 
               
            </form>
          </div>
        
        </div> 
  </div>
     
    @if(session("login")) 
    <script>
        setTimeout(function() {
            alert('Login Falhou!');
        }, 100); // Ajuste o tempo conforme necessário
    </script>
    @endif  
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
