<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users= [
           
            'Ramon',
            'Pedro',
        ];

        $listado ='Lista de Usuarios';

        return view('users',compact('users','listado'));
    }
    
    public function show($id){
        return 'Mostrar detalle del usuario:' .$id;
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
