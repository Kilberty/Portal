<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Empresas;
use App\Models\infra;

class InfraController extends Controller
{
    function infra(Request $request){
      
        $login = Session::get('logged');
      
      if($login == true){
       
       $cnpj = $request->input('CNPJ');
       $nome = $request->input('cliente');

       Session::put('cnpj',$cnpj);
       Session::put('cliente',$nome);      

       
       $empresas = Empresas::where('CGC',$cnpj)->first();
       if($empresas) {
        $id_empresa = $empresas->id;
       }
        
   
       $infra = infra::where('Empresa_ID',$id_empresa)->get();
       Session::put('infra',$infra);

       return response()->json(['redirect' => '/infra']);
      }else{
       
        return redirect('/login');
      }    
      
      
      
      

    }
}
