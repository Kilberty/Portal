<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link  href="{{asset('css/clientes.css')}}" type="text/css"  rel="stylesheet"  >
    
    <title>Clientes</title>
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

          
         function AcessaHome(){
            window.location.href('http://localhost:8000/logado')
         }       



    
    
    </script>
    
    <div class="box" style="background-color:white" >
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
                    <li><a href="/clientes" class="nav-link menuitem"><span style="margin-left:10px">NFS-e</span></a></li>
                    <li><a href="/clientes" class="nav-link menuitem"><span style="margin-left:10px">Meu Carrinho</span></a></li>
                   
                </ul>
            </nav>
           
            <div class="divLogout">
               <div class="row" style="height: 100%">
                   <div class="col" style="height: 100%">
                    <button style="width: 100%; border:none; border-radius:0px; color:white;  height:100%"  onclick="logout()"   class="btn btn-primary bg-dark" > Logout</button>

                   </div>
            
               </div>  
            </div>
                 
         </div>
    
        <div class="main">
         <div class="container-fluid "  style="border-bottom:2px solid black; height:10%;  padding:0; background-color:  #FFCC00 " >
            <div class="identifica">
                <div class="row" style="width: 100%; background-color:white; padding: 0; ">
                    <div class="col-10" style="text-align:left; padding:0;" >
                       <h1 style="margin-top: 1%; margin-left:1%" > Clientes</h1>
                    </div>
                    
                    <div class="col-2 bg-dark "  >
                       <div class="row" style="height: 100%;" >
                         <div class="usuario">
                             <div class="col-8" style="text-align: right; color:white " > <span> {{session('user')}} </span></div>
                             <div class="col-4 text-end "  > <img src="https://projetokilberty.blob.core.windows.net/sftp/imagens/softcom_perfil.jpg" class="rounded-circle" style="heigth:40px; " > </div>
                         </div>
                       </div>
                       
                    </div>
                </div>
              </div>
        
        </div> 
         
         
         
          <div class="alinha">
            <div class="page">
                <div class="busca">
                    <form>
                      <div class="row">
                          <div class="col"  >
                                <div class="input-group" style="margin-top: 2%" >
                                   <input type="text" class="form-control" placeholder="Digite o cnpj">
                                   <button type="submit" class="btn btn-dark"> Pesquisar</button>
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
                                 <th class="text-center"  ><button class="btn btn-outline-dark" onclick="select(this)"  >Selecionar</button></th>  
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>







</body>
</html>