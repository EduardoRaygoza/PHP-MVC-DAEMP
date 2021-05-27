<?php
class UsuariosModel extends Modelo{
    private $table;
     
    public function __construct(){
        $this->table="usuarios";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnUsuario($mail, $pass){
        $query="SELECT * FROM usuarios WHERE email='".$mail."' AND password = '".$pass."';";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>