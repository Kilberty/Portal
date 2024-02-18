<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\Usuario;
use App\Models\TipoOcorrencia;





class LogadoController extends Controller
{
    function logado(Request  $request ){
       
      $login = Session::get('logged');
      
      if($login == true){
        $Tipo_Ocorrencia = TipoOcorrencia::all();
        $Devs = Usuario::all();

        Session::put('Ocorrencias',$Tipo_Ocorrencia);
        Session::put('DEVS',$Devs);
        
        return view('logado');
         
      
      
      }else{
       
        return redirect('/login');
      }   
    
      
    }

}







