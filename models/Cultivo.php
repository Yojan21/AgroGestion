<?php

namespace Model;

class Cultivo extends ActiveRecord {
    protected static $tabla = 'cultivos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion','usuario_id', 'finca_id'];

    public $id;
    public $nombre;
    public $descripcion;
    public $finca_id;
    public $usuario_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
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
        return self::$alertas;
    }
}