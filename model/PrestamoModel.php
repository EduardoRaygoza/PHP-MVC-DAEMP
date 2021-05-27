<?php
class PrestamoModel extends Modelo{
    private $table;
     
    public function __construct(){
        $this->table="prestamos";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnPrestamo($id){
        $query="SELECT * FROM prestamos WHERE id=".$id.";";
        $prestamo=$this->ejecutarSql($query);
        return $prestamo;
    }
}
?>