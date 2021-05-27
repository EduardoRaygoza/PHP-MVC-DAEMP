<?php

class Autor extends Entidad{
    private $id;
    private $nombre;
    private $apellidos;
    private $nacionalidad;

    public function __construct(){
        $tabla = "autores";
        parent::__construct($tabla);
    }

    public function getID() { return $this->id; }
    public function setID($id) { $this->id = $id; }
    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function getApellidos() { return $this->apellidos; }
    public function setApellidos($apellidos) { $this->apellidos = $apellidos; }
    public function getNacionalidad() { return $this->nacionalidad; }
    public function setNacionalidad($nacionalidad) { $this->nacionalidad = $nacionalidad; }

    public function insert(){
        $query = "INSERT INTO autores (id, nombre, apellidos, nacionalidad) VALUES (NULL, 
            '".$this->nombre."',
            '".$this->apellidos."',
            '".$this->nacionalidad."')";
        $save = $this->getDB()->query($query);
        return $save;
    }

    //TODO: Metodo para insert, muy similar a insert()
}

?>