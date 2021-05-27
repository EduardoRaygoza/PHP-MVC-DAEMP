<?php
class AutorModel extends Modelo{
    private $table;
     
    public function __construct(){
        $this->table="autores";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnAutor($id){
        $query="SELECT * FROM autores WHERE id=".$id.";";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>