<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Ocorrencia;



class OcorrenciasController extends Controller
{
   function DataOcorrencias(Request $request){
     $data_ocorrencia = $request->input('Data');   
     $divide_data = explode("-",$data_ocorrencia);
     $dia = $divide_data[2];

     Session::put('data',$data_ocorrencia);
     Session::put('dia',$dia);
     
     
     $id = Session::get('id');
     $Ocorrencia = Ocorrencias::where('ID_Colaborador',$id)
                    ->where('Data_Retorno',$data)
                    ->with('tipoOcorrencia')
                    ->get(); 
     
     Session::put('Atividades',$Ocorrencia);
     
     
     
     
     
     return redirect('/logado');
   }

   function CreateOcorrencia(Request $request){
     $Descricao = $request->input('Atividade_Descri');
     $Tipo =  $request->input('TipoOC');
     $Dev =  $request->input('DevModal');
     $Data =  $request->input('retornoInput');
     $data_completa = date("Y-m-d");
     $OC = new Ocorrencia();
     $OC->Descricao = $Descricao;
     $OC->Colaborador_ID = $Dev;
     $OC->ID_TipoOcorrencia = $Tipo;
     $OC->Data_Retorno= $Data;
     $OC->Data_Criacao=$data_completa;
     $OC-> save();
     return redirect('/logado');
     }
  
  
  
  
  
  }