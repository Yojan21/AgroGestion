<?php

namespace Model;

class Cultivo extends ActiveRecord {
    protected static $tabla = 'cultivos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'cantidad','usuario_id', 'finca_id'];

    public $id;
    public $nombre;
    public $descripcion;
    public $cantidad;
    public $finca_id;
    public $usuario_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->cantidad = $args['cantidad'] ?? 0;
        $this->usuario_id = $args['usuario_id'] ?? '';
        $this->finca_id = $args['finca_id'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'la Descripcion es Obligatoria';
        }
        if(!$this->cantidad) {
            self::$alertas['error'][] = 'la Cantidad es Obligatoria';
        }
        return self::$alertas;
    }
}