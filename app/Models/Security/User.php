<?php

namespace App\Models\Security;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
class User extends Authenticatable
{
    //
    protected $remember_token = false;

    protected $table='user';
    protected $fillable = [
        'name', 'username', 'password',
    ];

    protected $guarded = ['id'];

    public function roles(){
        return $this->belongsToMany(Rol::class,'role_user');
    }

    public function setSession($roles)
    {
       
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['name'],
                    'nombre' =>  $this->name,
                ]
            );
        }
       
    }

}
