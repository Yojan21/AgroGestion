<?php

namespace Controllers;

use Model\Lote;
use MVC\Router;
use Model\Finca;
use Model\Usuario;

class LotesController{
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

        $lotes = Lote::whereArray($condiciones);
        
        $router->render('dashboard/fincas/lotes/index', [
            'titulo' =>  'Lotes de' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca,
            'lotes' => $lotes
        ]);
    }

    public static function crear(Router $router){
        if(!is_auth()){
            header('Location: /login');
        }
        $lote = new Lote();
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
            $lote->sincronizar($_POST);
            $alertas = $lote->validar();
            
            if(empty($alertas)){
                $lote->usuario_id = $_SESSION['id'];
                $lote->finca_id = $finca->id;
                $resultado = $lote->guardar();
                if($resultado){
                    header('Location: /dashboard/fincas/lotes/index?id=' . $finca->id);
                }
            }
        }
        
        $alertas = Lote::getAlertas();
        $router->render('dashboard/fincas/lotes/crear', [
            'titulo' =>  'Crear lote para' . $finca->nombre,
            'alertas' => $alertas,
            'finca' => $finca
        ]);
    }
}