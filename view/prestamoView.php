<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAEMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">BiblioLeon</a>
                <div class="collapse navbar-collapse" id="navBarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="<?php echo $helper->url("usuarios","index"); ?>" class="nav-link">Usuarios</a>
                        <a href="<?php echo $helper->url("libros","index"); ?>" class="nav-link">Libros</a>
                        <a href="#" class="nav-link active">Prestamos</a>
                        <a href="<?php echo $helper->url("autor","index"); ?>" class="nav-link">Autores</a>
                    </div>
                </div>
            </div>
        </nav>
    

    <form action="<?php echo $helper->url("Prestamo","create"); ?>" method="post" class="col-lg-12">
        <h3>Registrar prestamo</h3>
        <hr/>
        ID del libro: <input type="number" name="idlibro" class="form-control"/>
        <input type="submit" value="enviar" class="btn btn-success"/>
    </form>
         
        <div class="col-lg-12">
            <h3>Prestamos activos</h3>
            <hr/>
        </div>
        <section class="col-lg-12 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allPrestamos as $prestamo) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $prestamo->id; ?> -
                <?php echo $prestamo->idUsuario; ?> -
                <?php echo $prestamo->idLibro; ?> -
                <?php echo $prestamo->fechaPrestamo; ?> -
                <?php echo $prestamo->fechaLimite;  ?>   -
                <?php echo $prestamo->fechaDevolucion; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("Prestamo","borrar"); ?>&id=<?php echo $prestamo->id; ?>" class="btn btn-danger">Borrar</a>
                    <?php if(is_null($prestamo->fechaDevolucion)){
                        echo '<a href='.$helper->url("Prestamo","entregar").'&id='.$prestamo->id.' class="btn btn-secondary">Entregar</a>';
                    }?>
                </div>
                <hr/>
            <?php } ?>
        </section>


    <footer class="col-lg-12">
        <hr/>
        Desarrollo de aplicaciones empresariales ITL  - <a href="#">Github</a> - Copyright &copy; <?php echo  date("Y"); ?>
        <a href="<?php echo $helper->url("usuarios", "logout");?>"> Cerrar sesion </a>
    </footer>
    </div>
</body>
</html>