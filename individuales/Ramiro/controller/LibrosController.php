<?php

class LibrosController extends Controlador{
    
    public function index(){
        session_start();

        if(!isset($_SESSION["id"])){
            $this->redirect("Login", "Index");
        }

        $libro = new Libro();

        //Conseguimos a todos los usuarios
        $allLibros = $libro->getAll();

        //Cargamos la vista y le damos los valores que va a mostrar
        $this->view("libro", array(
            "alllibros"=>$allLibros
        ));
    }

    public function create(){
        if(isset($_POST["idautor"])){
            $libro = new Libro();
            $libro->setIDAutor($_POST["idautor"]);
            $libro->setTitulo($_POST["titulo"]);
            $libro->setISBN($_POST["isbn"]);
            $libro->setEditorial($_POST["editorial"]);
            $libro->setEdicion(($_POST["edicion"]));
            $libro->insert();
        }


        $this->redirect("Libros", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $libro=new Libro();
            $libro->deleteById($id);
        }
        $this->redirect("Libros", "index");
    }

}

?>