<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $table = 'Usuarios';
   protected $primaryKey = 'id';
   public $timestamps = true;
 
}
