<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    protected $table = 'Ocorrencias';
    protected $primaryKey = 'ID';

    public function tipoOcorrencia()
    {
        return $this->belongsTo(TipoOcorrencia::class, 'ID_TipoOcorrencia');
    }
    





}
