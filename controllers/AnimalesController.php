<?php

namespace Controllers;

use MVC\Router;
use Model\Finca;
use Model\Usuario;

class AnimalesController{
    public static function index(Router $router){
        if(!is_auth()){
            header('Location: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /dashboard/fincas');
        }
        $finca = Finca::find($id);
        if(!$finca){
            header('Location: /dashboard/fincas');
        }
        
        $router->render('dashboard/fincas/animales/index', [
            'titulo' =>  'Animales de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca
        ]);
    }
}