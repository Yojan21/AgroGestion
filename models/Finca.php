<?php

namespace Model;

class Finca extends ActiveRecord {
    protected static $tabla = 'fincas';
    protected static $columnasDB = ['id', 'nombre', 'departamento', 'municipio', 'vereda', 'extension', 'usuario_id'];

    public $id;
    public $nombre;
    public $departamento;
    public $municipio;
    public $vereda;
    public $extension;
    public $usuario_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->departamento = $args['departamento'] ?? '';
        $this->municipio = $args['municipio'] ?? '';
        $this->vereda = $args['vereda'] ?? '';
        $this->extension = $args['extension'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';'';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->departamento) {
            self::$alertas['error'][] = 'El departamento es Obligatorio';
        }
        if(!$this->municipio) {
            self::$alertas['error'][] = 'El municipio es Obligatorio';
        }
        if(!$this->vereda) {
            self::$alertas['error'][] = 'La vereda es Obligatoria';
        }
        if(!$this->extension) {
            self::$alertas['error'][] = 'La extensión es Obligatoria';
        }

        return self::$alertas;
    }
}