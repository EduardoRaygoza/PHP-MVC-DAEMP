<?php

class LoginController extends Controlador {

    public function index(){
        $this->view("login", array());
    }

    public function login(){
        if( (isset($_POST["mail"]) && isset($_POST["pass"])) ){
            //require_once '../model/UsuarioModel.php';
            $usuarios=new UsuariosModel();
            $usu=$usuarios->getUnUsuario($_POST["mail"], $_POST["pass"]);

            if($usu){
                if(gettype($usu) == "object"){
                    session_start();
                    $_SESSION["id"]=$usu->id;
                    $_SESSION["nombre"]=$usu->nombre;
                    $_SESSION["apellido"]=$usu->apellido;
                    $this->redirect("Usuarios", "index");
                } else {
                    $this->redirect("Login", "index");    
                }
            } else {
                $this->redirect("Login", "index");
            }

        } else {
            $this->redirect("Login", "index");
        }
    }

}

?>