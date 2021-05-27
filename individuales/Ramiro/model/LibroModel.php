<?php
class LibrosModel extends Modelo{
    private $table;
     
    public function __construct(){
        $this->table="libro";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnLibro($ISBN){
        $query="SELECT * FROM libros WHERE ISBN='".$ISBN.";";
        $libro=$this->ejecutarSql($query);
        return $libro;
    }
}
?>