<?php

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {


        // Render a la vista 
        $router->render('paginas/index', [
            'titulo' => 'Inicio',
        ]);
    }

    public static function nosotros(Router $router) {


        // Render a la vista 
        $router->render('paginas/nosotros', [
            'titulo' => 'Nosotros',
        ]);
    }

    public static function contacto(Router $router) {


        // Render a la vista 
        $router->render('paginas/contacto', [
            'titulo' => 'Contacto',
        ]);
    }

    public static function planes(Router $router) {


        // Render a la vista 
        $router->render('paginas/planes', [
            'titulo' => 'Nuestro Planes',
        ]);
    }

    public static function terminos(Router $router) {


        // Render a la vista 
        $router->render('politicas/terminos', [
            'titulo' => 'Terminos y Condiciones',
        ]);
    }

    public static function tratamiento(Router $router) {


        // Render a la vista 
        $router->render('politicas/tratamiento', [
            'titulo' => 'Politicas de tratamiento de datos',
        ]);
    }
}
