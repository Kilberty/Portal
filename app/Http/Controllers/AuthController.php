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
    $data_completa = date("Y-m-d");
    $divide_data = explode("-",$data_completa);
    $dia = $divide_data[2];
    
    if (strlen($dia)<2) {
      $dia = str_pad($partesData[0], 2, "0", STR_PAD_LEFT);
    } 

    



    $usuarioupper = strtoupper($usuario);
    
    $login = Usuario::where('Usuario',$usuarioupper)  
                     -> where('Senha',$senha)
                     ->first();
    
    
     $usuariolower = strtolower($usuarioupper);
     $user = ucfirst($usuariolower);
    
    if ($login) {
      
      $id = $login->id;
      Session::put('dia',$dia);     
      Session::put('data',$data_completa);

      Session::put('logged',true);
      Session::put('user',$user);
      return redirect('/logado');
  } else {
     return redirect('/login')->with('login','Login Falhou!');
  }


  } 




}
