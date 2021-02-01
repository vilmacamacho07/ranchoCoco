<?php

namespace App\Models\USer;

use Illuminate\Database\Eloquent\Model;

class Ganado extends Model
{
    //
    protected $table='animals';
    protected $fillable = [
        'peso', 'sexo', 'fecha_ingreso','edad','tipo','raza','categoria','gestacion',
    ];

    protected $guarded = ['id'];
}
