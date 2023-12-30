<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Empresas;

class ClientesController extends Controller
{
   
    function clientes(Request  $request ){
       
       $login = Session::get("logged");
       


        if($login == true){
          $empresas =  Empresas::all();
          return view("Clientes",['empresas'=>$empresas]);
        }else{
         return redirect("/login");
        }   
       
        return view('Clientes');
      }
  

  
     


}
