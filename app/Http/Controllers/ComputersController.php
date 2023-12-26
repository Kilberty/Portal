<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComputersController extends Controller
{
 function computers(){
    
   $login = Session::get('logged');
      
   if($login == true){
      $cliente = Session::get('cliente');
      $CNPJ = Session::get('cnpj');
      
     
      
      return view('infra');
   }else{
    
     return redirect('/login');
   }   
 
   
   
   
 }



}
