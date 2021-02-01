<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Alimentouso extends Model
{
    //
    protected $table='alimentousado';
    protected $fillable = [
        'cantidadusada', 'fecha_uso',
    ];
  
    
}
