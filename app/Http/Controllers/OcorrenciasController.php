<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OcorrenciasController extends Controller
{
   function Ocorrencias(Request $request){
     $data_ocorrencia = $request->input('Data');   
     $divide_data = explode("-",$data_ocorrencia);
     $dia = $divide_data[2];

     Session::put('data',$data_ocorrencia);
     Session::put('dia',$dia);
     
     return redirect('/logado');
   }
}