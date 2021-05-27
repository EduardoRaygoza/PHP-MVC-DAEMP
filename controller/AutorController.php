<?php

class AutorController extends Controlador{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        session_start();

        if(!isset($_SESSION["id"])){
            $this->redirect("Login", "Index");
        }


        $autor = new Autor();

        //Conseguimos a todos los usuarios
        $allAutores = $autor->getAll();

        //Cargamos la vista y le damos los valores que va a mostrar
        $this->view("autor", array(
            "allautores"=>$allAutores
        ));
    }

    public function create(){
        if(isset($_POST["nombre"])){
            $autor=new Autor();
            $autor->setNombre($_POST["nombre"]);
            $autor->setApellidos($_POST["apellidos"]);
            $autor->setNacionalidad($_POST["nacion"]);
            $autor->insert();
        }
        $this->redirect("Autor", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $autor=new Autor();
            $autor->deleteById($id);
        }
        $this->redirect("Autor", "index");
    }


    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
        $this->redirect("Login", "index");
    }
}

?>