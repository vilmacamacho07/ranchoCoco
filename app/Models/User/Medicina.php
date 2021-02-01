<?php

namespace App\Models\USer;

use Illuminate\Database\Eloquent\Model;

class Medicina extends Model
{
    //
    protected $table='medicina';
    protected $fillable = [
        'namemed', 'ml', 'fecha_compra','estado',
    ];

    protected $guarded = ['id'];
}
