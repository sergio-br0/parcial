<?php
require 'Conexion.php';

class cursos extends Conexion{
    public $cursos_id;
    public $cursos_nombre;
    public $cursos_cantidad_per;
    public $cursos_fase;
    public $cursos_instructor;
    public $cursos_creditos;

    public function __construct($args = [] )
    {
        $this->cursos_id = $args['cursos_id'] ?? null;
        $this->cursos_nombre = $args['cursos_nombre'] ?? '';
        $this->cursos_cantidad_per = $args['cursos_cantidad_per'] ?? '';
        $this->cursos_fase = $args['cursos_fase'] ?? '';
        $this->cursos_instructor = $args['cursos_instructor'] ?? '';
        $this->cursos_creditos = $args['cursos_creditos'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO cursos(cursos_nombre, cursos_cantidad_per, cursos_fase, cursos_instructor, cursos_creditos) values('$this->cursos_nombre','$this->cursos_cantidad_per', '$this->cursos_fase', '$this->cursos_instructor', '$this->cursos_creditos')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
