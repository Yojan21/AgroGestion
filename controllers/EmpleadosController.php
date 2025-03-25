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
        $empleados = Empleado::all_usuario('ASC', 'usuario_id', $_SESSION['id']);

        // Render a la vista 
        $router->render('dashboard/empleados/index', [
            'titulo' => 'Mis Empleados',
            'empleados' => $empleados
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

    public static function editar(Router $router) {
        if(!is_auth()){
            header('Location: /login');
        }

        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /dashboard/empleados');
        }

        $empleado = Empleado::find($id);
        if(!$empleado){
            header('Location: /dashboard/empleados');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /login');
            }

            $empleado->sincronizar($_POST);
            $alertas = $empleado->validar();
            if(empty($alertas)){
                $resultado = $empleado->guardar();
                if($resultado){
                    header('Location: /dashboard/empleados/index');
                }
            }
        }

        $router->render('dashboard/empleados/editar', [
            'titulo' => 'Editar Empleado',
            'alertas' => $alertas,
            'empleado' => $empleado
        ]);
    }

    public static function eliminar(){
        
        if(!is_auth()){
            header('Location: /dashboard/empleados');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /dashboard/empleados/index');
            }
            
            $id = $_POST['id'];
            $empleado = Empleado::find($id);
            
            if(!isset($finca)){
                header('location: /dashboard/empleados/index');
            }

            $resultado = $empleado->eliminar();
            if($resultado){
                header('location: /dashboard/empleados/index');
            }
        }
    }

    public static function perfil(Router $router) {
        if(!is_auth()){
            header('Location: /login');
        }

        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /dashboard/empleados');
        }

        $empleado = Empleado::find($id);

        if(!$empleado){
            header('Location: /dashboard/empleados');
        }

        $router->render('dashboard/empleados/perfil', [
            'titulo' => 'Gestiona Tu Empleado',
            'empleado' => $empleado
        ]);
    }
}