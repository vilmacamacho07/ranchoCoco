<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    //
    protected $table='alimento';
    protected $fillable = [
        'cantidad', 'fecha_compra',
    ];

    protected $guarded = ['id'];

   
}
