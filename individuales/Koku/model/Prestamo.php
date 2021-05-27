<?php

class Prestamo extends Entidad{
    private $id;
    private $idUsuario;
    private $idLibro;
    private $fechaPrestamo;
    private $fechaLimite;
    private $fechaDevolucion;

    public function __construct(){
        $tabla = "prestamos";
        parent::__construct($tabla);
    }

    public function getID() { return $this->id; }
    public function setID($id) { $this->id = $id; }
    public function getIDUsuario() { return $this->idUsuario; }
    public function setIDUsuario($idUsuario) { $this->idUsuario = $idUsuario; }
    public function getIDLibro() { return $this->idLibro; }
    public function setIDLibro($idLibro) { $this->idLibro = $idLibro; }
    public function getFechaPrestamo() { return $this->fechaPrestamo; }
    public function setFechaPrestamo($fechaPrestamo) { $this->fechaPrestamo = $fechaPrestamo; }
    public function getFechaLimite() { return $this->fechaLimite; }
    public function setFechaLimite($fechaLimite) { $this->fechaLimite = $fechaLimite; }
    public function getFechaDevolucion() { return $this->fechaDevolucion; }
    public function setFechaDevolucion($fechaDevolucion) { $this->fechaDevolucion = $fechaDevolucion; }

    public function insert(){
        $query = "INSERT INTO prestamos (id, idUsuario, idLibro, fechaPrestamo, fechaLimite) VALUES (NULL, 
            '".$this->idUsuario."',
            '".$this->idLibro."',
            '".$this->fechaPrestamo."',
            '".$this->fechaLimite."')";
        $save = $this->getDB()->query($query);
        return $save;
    }

    public function updateEntrega(){
        $query = "UPDATE prestamos SET fechaDevolucion = '".$this->fechaDevolucion."' WHERE id = ".$this->id.";";
        $save = $this->getDB()->query($query);
        return $save;
    }

    //TODO: Metodo para insert, muy similar a insert()
}

?>