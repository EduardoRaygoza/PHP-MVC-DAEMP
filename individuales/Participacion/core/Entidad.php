<?php

class Entidad{
    private $table;
    private $db;
    private $conexion;

    public function __construct($table){
        $this->table = (string) $table;

        require_once "Conexion.php";
        $this->conexion = new Conexion();
        $this->db = $this->conexion->conexion();
    }

    public function getConexion(){
        return $this->conexion;
    }

    public function getDB(){
        return $this->db;
    }

    public function getAll(){
        $query = $this->db->query("SELECT * FROM ".$this->table." ORDER BY id DESC;");
        if($query->num_rows > 0){
            while($row = $query->fetch_object()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return array();
    }

    public function getByID($id){
        $query = $this->db->query("SELECT * FROM $this->table WHERE id=$id");
        if($row = $query->fetch_object()){
            $resultSet[] = $row;
        }
        return $resultSet;
    }

    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }
     
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }
}

?>