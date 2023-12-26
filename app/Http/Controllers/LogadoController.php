<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
class LogadoController extends Controller
{
    function logado(Request  $request ){
       
      $login = Session::get('logged');
      
      if($login == true){
        return view('logado');
      }else{
       
        return redirect('/login');
      }   
    
      
    }

}







