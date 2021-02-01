<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{ 
    // __invoke -> metodo unico solo llamar al controlador sin la funcion (web.php)
    public function index($name, $nickname=null)
    {   
        $name= ucfirst($name);

        if ($nickname) {
            return 'Bienvenido' .$name .' tu apodo es' .$nickname;
        } else {
            return 'Bienvenido' .$name;
        }
        
    }
}
