<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://projetokilberty.blob.core.windows.net/sftp/css/clientes.css" type="text/css"  rel="stylesheet"  >
    
    <title>Document</title>
</head>
<body>
    <script>
        function logout(){
            window.location.href = '/logout'
        }
    
        function select(botao){
            var linha =  botao.closest('tr')
            var cliente = linha.cells[0].innerText;
            var cnpj = linha.cells[1].innerText;

             $.ajax({
                 url:'/infradados',
                 type: 'POST',
                 data:
                    {
                        cliente: cliente,
                        CNPJ: cnpj,
                        _token: '{{ csrf_token() }}'
                    },
                         
                        
                 success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                     }},
                 
                 error: function(error) {
                    console.error('Erro:', error);
                    }    

                
                
                })}

                         
    
    
    </script>
    
    <div class="box">
        <div class="menu bg-dark ">
            <nav>
                <ul class="navbar-nav sidebar sidebar-dark accordion">
                    <li><a href="/logado" style="color:white;" class="nav-link" >Home</a></li>
                    <li><a href="/logado" style="color: white"  class="nav-link ">Clientes</a> </li>
                    <li> <a href="/clientes" style="color: white" class="nav-link" >NFSE</a></li>
                    <li> <a href="/clientes" style="color: white" class="nav-link ultitem" >Meu Carrinho</a></li>
                    <li><button style="width: 100%; border:none; color:white; "  onclick="logout()"  class="btn btn-primary bg-dark" > Logout</button></li>
                </ul>
            </nav>
        </div>
    
        <div class="main">
         <div class="page">
                <div class="busca">
                    <form>
                      <div class="row">
                          <div class="col"  >
                                <div class="input-group" style="margin-top: 2%" >
                                   <input type="text" class="form-control" placeholder="Digite o cnpj">
                                   <button type="button" class="btn btn-primary"> Pesquisar</button>
                                </div>
                            </div>
                        </div>
                      </form>     
                </div>
               
              <div class="lista">
                <div class="table-responsive">
                   <table class="table table-bordered "">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 40%;"  >Cliente</th>
                            <th class="text-center" style="width: 40%;"  >CNPJ</th>
                            <th class="text-center" style="width: 20%;" >Ação</th>
                        </tr>
                    </thead>
                      <tbody>
                           @foreach ($empresas as $empresa)
                                <tr>
                                 <th>{{$empresa->Nome}}</th>
                                 <th class="text-center">{{$empresa->CGC}}</th>
                                 <th class="text-center"  ><button class="btn btn-outline-dark" onclick="select(this)" >Selecionar</button></th>  
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
    






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>







</body>
</html>