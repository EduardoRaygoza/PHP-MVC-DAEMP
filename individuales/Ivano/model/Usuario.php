<?php

class Usuario extends Entidad{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    public function __construct(){
        $tabla = "usuarios";
        parent::__construct($tabla);
    }

    public function getID() { return $this->id; }
    public function setID($id) { $this->id = $id; }
    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function getApellido() { return $this->apellido; }
    public function setApellido($apellido) { $this->apellido = $apellido; }
    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }
    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }

    public function insert(){
        $query = "INSERT INTO usuarios (id, nombre, apellido, email, password) VALUES (NULL, 
            '".$this->nombre."',
            '".$this->apellido."',
            '".$this->email."',
            '".$this->password."')";
        $save = $this->getDB()->query($query);
        return $save;
    }

    //TODO: Metodo para insert, muy similar a insert()
}

?>