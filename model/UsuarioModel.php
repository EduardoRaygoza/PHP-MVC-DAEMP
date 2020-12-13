<?php
class UsuariosModel extends Modelo{
    private $table;
     
    public function __construct(){
        $this->table="usuarios";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM usuarios WHERE email='eduardoraygoza@gmail.com'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>