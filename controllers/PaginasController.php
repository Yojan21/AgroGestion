<?php

namespace Controllers;

use MVC\Router;
use Classes\Email;
use Model\Usuario;

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

        $alertas = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['mensaje'])) {
                Usuario::setAlerta('error', 'Todos los campos son obligatorios');
            }
            $alertas = Usuario::getAlertas();
            if(empty($alertas)){
                // Enviar el email

                $nombre = $_POST['nombre'] . ' ' . $_POST['apellido'];
                $telefono = $_POST['telefono'];
                $mensaje = $_POST['mensaje'];
                $correo = $_POST['email'];
                $email = new Email($nombre, $correo, $mensaje);

                $email->enviarContacto();
            }
        }
        
        // Render a la vista 
        $router->render('paginas/contacto', [
            'titulo' => 'Contacto',
            'alertas' => $alertas
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
