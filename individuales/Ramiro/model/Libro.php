<?php

class Libro extends Entidad{
    private $id;
    private $idAutor;
    private $titulo;
    private $ISBN;
    private $editorial;
    private $edicion;

    public function __construct(){
        $tabla = "libros";
        parent::__construct($tabla);
    }

    public function getID() { return $this->id; }
    public function setID($id) { $this->id = $id; }
    public function getIDAutor() { return $this->idAutor; }
    public function setIDAutor($idAutor) { $this->idAutor = $idAutor; }
    public function getTitulo() { return $this->titulo; }
    public function setTitulo($titulo) { $this->titulo = $titulo; }
    public function getISBN() { return $this->ISBN; }
    public function setISBN($ISBN) { $this->ISBN = $ISBN; }
    public function getEditorial() { return $this->editorial; }
    public function setEditorial($editorial) { $this->editorial = $editorial; }
    public function getEdicion() { return $this->edicion; }
    public function setEdicion($edicion) { $this->edicion = $edicion; }

    public function insert(){
        $query = "INSERT INTO libros (id, idAutor, titulo, ISBN, editorial, edicion) VALUES (NULL, 
            ".$this->idAutor.",
            '".$this->titulo."',
            '".$this->ISBN."',
            '".$this->editorial."',
            ".$this->edicion.")";
        $save = $this->getDB()->query($query);
        return $save;
    }

    //TODO: Metodo para update, muy similar a insert()
}

?>