<?php

class PrestamoController extends Controlador{
    
    public function index(){
        session_start();

        if(!isset($_SESSION["id"])){
            $this->redirect("Login", "Index");
        }

        $prestamo = new Prestamo();

        //Conseguimos a todos los usuarios
        $allPrestamos = $prestamo->getAll();

        //Cargamos la vista y le damos los valores que va a mostrar
        $this->view("prestamo", array(
            "allPrestamos"=>$allPrestamos
        ));
    }

    public function create(){
        session_start();
        if(isset($_POST["idlibro"])){
            $prestamo = new Prestamo();
            $prestamo->setIDUsuario($_SESSION["id"]);
            $prestamo->setIDLibro($_POST["idlibro"]);
            
            $semana = time() + (7*24*60*60);
            $fechaActual = date("Y/m/d");
            $fechaLimite = date("Y/m/d", $semana);

            $prestamo->setFechaPrestamo($fechaActual);
            $prestamo->setFechaLimite($fechaLimite);

            $prestamo->insert();
        }


        $this->redirect("Prestamo", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $prestamo=new Prestamo();
            $prestamo->deleteById($id);
        }
        $this->redirect("Prestamo", "index");
    }

    public function entregar(){
        if(isset($_GET["id"])){
            $prestamo = new Prestamo();
            $prestamo->setID((int) $_GET["id"] );

            $fechaActual = date("Y/m/d");
            $prestamo->setFechaDevolucion($fechaActual);

            $prestamo->updateEntrega();
        }
        $this->redirect("Prestamo", "index");
    }

}

?>