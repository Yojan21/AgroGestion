<?php

namespace Controllers;

use MVC\Router;
use Model\Finca;
use Model\Usuario;

class FincasController{
    public static function index(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        } 

        // Render a la vista 
        $router->render('dashboard/fincas/index', [
            'titulo' => 'Mis Fincas',
        ]);
    }

    public static function crear(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }

        $alertas = [];
        $finca = new Finca;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if(!is_auth()){
                header('Location: /login');
            }
            
            $finca->sincronizar($_POST);
            $alertas = $finca->validar();

            $finca->usuario_id = $_SESSION['id'];

            if(empty($alertas)){
                $resultado = $finca->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/index');
                }
            }
        }


        $alertas = Usuario::getAlertas();
        // Render a la vista 
        $router->render('dashboard/fincas/crear', [
            'titulo' => 'Crear Finca',
            'alertas' => $alertas
        ]);
    }
}