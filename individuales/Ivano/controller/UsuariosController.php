<?php

class UsuariosController extends Controlador{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        session_start();

        if(!isset($_SESSION["id"])){
            $this->redirect("Login", "Index");
        }


        $user = new Usuario();

        //Conseguimos a todos los usuarios
        $allUsers = $user->getAll();

        //Cargamos la vista y le damos los valores que va a mostrar
        $this->view("index", array(
            "allusers"=>$allUsers,
            "Hola"=>"Ejemplo para la materia de desarrollo de aplicaciones empresariales"
        ));
    }

    public function create(){
        if(isset($_POST["nombre"])){
            $usuario=new Usuario();
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(($_POST["password"]));
            $usuario->insert();
        }
        $this->redirect("Usuarios", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $usuario=new Usuario();
            $usuario->deleteById($id);
        }
        $this->redirect("Usuarios", "index");
    }

    public function hola(){
        require_once '../model/UsuarioModel.php';
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
        $this->redirect("Login", "index");
    }
}

?>