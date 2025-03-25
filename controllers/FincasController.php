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

        $fincas = Finca::all_usuario('ASC', 'usuario_id', $_SESSION['id']);
        // Render a la vista 
        $router->render('dashboard/fincas/index', [
            'titulo' => 'Mis Fincas',
            'fincas' => $fincas
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

    public static function editar(Router $router) {
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

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /login');
            }

            $finca->sincronizar($_POST);
            $alertas = $finca->validar();
            if(empty($alertas)){
                $resultado = $finca->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/index');
                }
            }
        }

        $router->render('dashboard/fincas/editar', [
            'titulo' => 'Editar Finca',
            'alertas' => $alertas,
            'finca' => $finca
        ]);
    }

    public static function eliminar(){
        
        if(!is_auth()){
            header('Location: /dashboard/fincas');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /dashboard/fincas/index');
            }
            
            $id = $_POST['id'];
            $finca = Finca::find($id);
            
            if(!isset($finca)){
                header('location: /dashboard/fincas/index');
            }

            $resultado = $finca->eliminar();
            if($resultado){
                header('location: /dashboard/fincas/index');
            }
        }
    }
}