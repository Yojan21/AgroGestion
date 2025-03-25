<?php

namespace Controllers;

use Model\Empleado;
use MVC\Router;
use Model\Finca;

class DashboardController{
    public static function index(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }
        $fincas = new Finca;
        $empleados = new Empleado;
        $usuario = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];

        $num_fincas = $fincas->total('usuario_id', $_SESSION['id']);
        $num_empleados = $empleados->total('usuario_id', $_SESSION['id']);

        // Render a la vista 
        $router->render('dashboard/index', [
            'titulo' => 'Vista General',
            'empleados' => $num_empleados,
            'fincas' => $num_fincas,
            'usuario' => $usuario
        ]);
    }

    public static function cuenta(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }


        // Render a la vista 
        $router->render('dashboard/cuenta', [
            'titulo' => 'Mi cuenta',
        ]);
    }

}