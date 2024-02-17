<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
class AuthController extends Controller

{
   
  function Auth(Request $request){
    $usuario = $request->input('usuario');
    $senha = $request->input('senha');
    
    $usuarioupper = strtoupper($usuario);
    
    $login = Usuario::where('Usuario',$usuarioupper)  
                     -> where('Senha',$senha)
                     ->first();
    
    
     $usuariolower = strtolower($usuarioupper);
     $user = ucfirst($usuariolower);
    
    if ($login) {
      
      $id = $login->id;
      
      Session::put('logged',true);
      Session::put('user',$user);
      return redirect('/logado');
  } else {
     
     return redirect('/login')->with('login','Login Falhou!');
     
     
    
   }


  } 




}
