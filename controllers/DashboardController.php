<?php

namespace Controllers;

use MVC\Router;

class DashboardController{
    public static function index(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }

        // Render a la vista 
        $router->render('dashboard/index', [
            'titulo' => 'Vista General',
        ]);
    }

    public static function fincas(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }


        // Render a la vista 
        $router->render('dashboard/fincas', [
            'titulo' => 'Mis Fincas',
        ]);
    }

    public static function empleados(Router $router) {

        if(!is_auth()){
            header('Location: /login');
        }


        // Render a la vista 
        $router->render('dashboard/empleados', [
            'titulo' => 'Mis empleados',
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