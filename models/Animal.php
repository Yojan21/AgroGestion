<?php

namespace Model;

class Animal extends ActiveRecord {
    protected static $tabla = 'animales';
    protected static $columnasDB = ['id', 'nombre', 'raza','usuario_id', 'finca_id'];

    public $id;
    public $nombre;
    public $raza;
    public $finca_id;
    public $usuario_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->raza = $args['raza'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';
        $this->finca_id = $args['finca_id'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->raza) {
            self::$alertas['error'][] = 'la Raza es Obligatoria si no aplica escribe "N/A"';
        }
        return self::$alertas;
    }
}