<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
use Model\Empleado;

class EmpleadosController{
    public static function index(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        } 

        // Render a la vista 
        $router->render('dashboard/empleados/index', [
            'titulo' => 'Mis Empleados',
        ]);
    }

    public static function crear(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }

        $alertas = [];
        $empleado = new Empleado;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if(!is_auth()){
                header('Location: /login');
            }
            
            $empleado->sincronizar($_POST);
            $alertas = $empleado->validar();

            $empleado->usuario_id = $_SESSION['id'];
            if(empty($alertas)){
                
                $resultado = $empleado->guardar();
                if($resultado){
                    header('Location: /dashboard/empleados/index');
                }
            }
        }


        $alertas = Usuario::getAlertas();
        // Render a la vista 
        $router->render('dashboard/empleados/crear', [
            'titulo' => 'Crear Empleado',
            'alertas' => $alertas
        ]);
    }
}