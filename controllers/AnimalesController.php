<?php

namespace Controllers;

use MVC\Router;
use Model\Finca;
use Model\Animal;
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
        $condiciones = [
            'finca_id' => $finca->id,
            'usuario_id' => $_SESSION['id']
        ];

        $animales = Animal::whereArray($condiciones);
        
        $router->render('dashboard/fincas/animales/index', [
            'titulo' =>  'Animales de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca,
            'animales' => $animales
        ]);
    }

    public static function crear(Router $router){
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
            $animal = new Animal($_POST);
            $animal->usuario_id = $_SESSION['id'];
            $animal->finca_id = $finca->id;
            $alertas = $animal->validar();
            if(empty($alertas)){
                $animal->guardar();
                header('Location: /dashboard/fincas/animales/index?id=' . $finca->id);
            }
        }
        
        $router->render('dashboard/fincas/animales/crear', [
            'titulo' =>  ' Crear animal para ' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca
        ]);
    }

    public static function editar(Router $router){
        if(!is_auth()){
            header('Location: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $token = $_GET['token'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $token = filter_var($token, FILTER_VALIDATE_INT);

        if(!$id || !$token){
            header('Location: /dashboard/fincas');
        }

        $finca = Finca::find($id);
        $animal = Animal::find($token);
        if(!$finca || !$animal || $animal->finca_id !== $finca->id){
            header('Location: /dashboard/fincas');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /login');
            }
            $animal->sincronizar($_POST);
            $alertas = $animal->validar();
            if(empty($alertas)){
                $resultado = $animal->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/animales/index?id=' . $finca->id);
                }            }
        }

        $alertas = Animal::getAlertas();
        $router->render('dashboard/fincas/animales/editar', [
            'titulo' =>  'Animales de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca,
            'animal' => $animal
        ]);
    }

    public static function eliminar(){
        if(!is_auth()){
            header('Location: /login');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_auth()){
                header('Location: /login');
            }
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if(!$id){
                header('Location: /dashboard/fincas');
            }
            $animal = Animal::find($id);
            if(!$animal){
                header('Location: /dashboard/fincas');
            }
            $resultado = $animal->eliminar();
            if($resultado){
                header('Location: /dashboard/fincas/animales/index?id=' . $animal->finca_id);
            }
        }
    }
}