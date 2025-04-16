<?php

namespace Controllers;

use MVC\Router;
use Model\Finca;
use Model\Cultivo;
use Model\Usuario;

class CultivosController{
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

        $condiciones = [
            'finca_id' => $finca->id,
            'usuario_id' => $_SESSION['id']
        ];

        $cultivos = Cultivo::whereArray($condiciones);
        
        $router->render('dashboard/fincas/cultivos/index', [
            'titulo' =>  'Cultivos de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca,
            'cultivos' => $cultivos
        ]);
    }

    public static function crear(Router $router){
        if(!is_auth()){
            header('Location: /login');
        }
        $cultivo = new Cultivo();
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

            $cultivo->sincronizar($_POST);
            $alertas = $cultivo->validar();
            if(empty($alertas)){
                $cultivo->usuario_id = $_SESSION['id'];
                $cultivo->finca_id = $finca->id;
                $resultado = $cultivo->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/cultivos/index?id=' . $finca->id);                    
                }
            }
        }

        $alertas = Cultivo::getAlertas();
        $router->render('dashboard/fincas/cultivos/crear', [
            'titulo' =>  'Cultivos de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca
        ]);
    }

    public static function editar(Router $router){

        if(!is_auth()){
            header('Location: /login');
        }
        $id = $_GET['id'];
        $token = $_GET['token'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $token = filter_var($token, FILTER_VALIDATE_INT);
        if(!$id || !$token){
            header('Location: /dashboard/fincas');
        }

        
        $finca = Finca::find($id);
        $cultivo = Cultivo::find($token);


        if(!$finca || !$cultivo || $cultivo->finca_id !== $finca->id){
            header('Location: /dashboard/fincas');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /login');
            }
            $cultivo->sincronizar($_POST);
            $alertas = $cultivo->validar();
            if(empty($alertas)){
                $cultivo->usuario_id = $_SESSION['id'];
                $cultivo->finca_id = $finca->id;
                $resultado = $cultivo->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/cultivos/index?id=' . $finca->id);
                }
            }
        }

        $alertas = Cultivo::getAlertas();
        $router->render('dashboard/fincas/cultivos/editar', [
            'titulo' =>  'Editar' . $cultivo->nombre,
            'alertas' => $alertas,
            'finca' => $finca,
            'cultivo' => $cultivo
        ]);
    }

    public static function eliminar(){
        if(!is_auth()){
            header('Location: /login');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if(!$id){
                header('Location: /dashboard/fincas');
            }
            $cultivo = Cultivo::find($id);
            if(!$cultivo){
                header('Location: /dashboard/fincas');
            }
            $resultado = $cultivo->eliminar();
            if($resultado){
                header('Location: /dashboard/fincas/cultivos/index?id=' . $cultivo->finca_id);
            }
        }
    }
}