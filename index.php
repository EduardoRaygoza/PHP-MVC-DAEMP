<?php

//Cargamos configuracion global
require_once 'config/global.php';

//Cargamos la base de controladores
require_once 'core/Controlador.php';

//Cargamos funciones para controlador frontal
require_once 'core/ControladorFrontal.func.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}

?>