<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LogoutController extends Controller
{
  

 function logout(){

    Session::put('logged',false);
    return redirect('/login');


 }


  





}
