<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    //protected $table = 'permission'; ---> Si la tabla en la base de datos es singular
   

    protected $table = 'permissions';
    protected $fillable = ['name', 'slug'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permission_role');
    }
}
