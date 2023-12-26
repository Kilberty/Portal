<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ClientesController extends Controller
{
   
    function clientes(Request  $request ){
       
       $login = Session::get("logged");
        
        if($login == true){
          return view("Clientes");
        }else{
         return redirect("/login");
        }   
       
        return view('Clientes');
      }
  

  
     


}
