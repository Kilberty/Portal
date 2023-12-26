<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InfraController extends Controller
{
    function infra(Request $request){
      
        $login = Session::get('logged');
      
      if($login == true){
        
       $cnpj = $request->input('CNPJ');
       $nome = $request->input('cliente');

       Session::put('cnpj',$cnpj);
       Session::put('cliente',$nome);      

       return response()->json(['redirect' => '/infra']);
      }else{
       
        return redirect('/login');
      }    
      
      
      
      

    }
}
