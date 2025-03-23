<?php

namespace Model;

class Empleado extends ActiveRecord {
    protected static $tabla = 'empleados';
    protected static $columnasDB = ['id', 'nombre', 'cedula', 'telefono', 'cuenta', 'banco', 'numero', 'usuario_id'];

    public $id;
    public $nombre;
    public $cedula;
    public $telefono;
    public $cuenta;
    public $banco;
    public $numero;
    public $usuario_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cedula = $args['cedula'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->cuenta = $args['cuenta'] ?? '';
        $this->banco = $args['banco'] ?? '';
        $this->numero = $args['numero'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';'';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->cedula) {
            self::$alertas['error'][] = 'La cedula es Obligatoria';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'El telefono es Obligatorio';
        }
        if(!$this->cuenta) {
            self::$alertas['error'][] = 'La cuenta es Obligatoria';
        }
        if(!$this->banco) {
            self::$alertas['error'][] = 'El banco es Obligatori0';
        }
        if(!$this->numero) {
            self::$alertas['error'][] = 'El numero de cuenta es Obligatorio';
        }

        return self::$alertas;
    }
}