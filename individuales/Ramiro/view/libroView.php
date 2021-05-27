<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAEMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">BiblioLeon</a>
                <div class="collapse navbar-collapse" id="navBarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="<?php echo $helper->url("usuarios","index"); ?>" class="nav-link">Usuarios</a>
                        <a href="#" class="nav-link active">Libros</a>
                        <a href="<?php echo $helper->url("prestamo","index"); ?>" class="nav-link">Prestamos</a>
                        <a href="<?php echo $helper->url("autor","index"); ?>" class="nav-link">Autores</a>
                    </div>
                </div>
            </div>
        </nav>
    

    <form action="<?php echo $helper->url("Libros","create"); ?>" method="post" class="col-lg-12">
        <h3>Añadir libro</h3>
        <hr/>
        ID del autor: <input type="number" name="idautor" class="form-control"/>
        Titulo: <input type="text" name="titulo" class="form-control"/>
        ISBN: <input type="text" name="isbn" class="form-control"/>
        Editorial: <input type="text" name="editorial" class="form-control"/>
        Edicion: <input type="text" name="edicion" class="form-control"/>
        <input type="submit" value="enviar" class="btn btn-success"/>
    </form>
         
        <div class="col-lg-12">
            <h3>Libros</h3>
            <hr/>
        </div>
        <section class="col-lg-12 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($alllibros as $libro) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $libro->id; ?> -
                <?php echo $libro->idAutor; ?> -
                <?php echo $libro->titulo; ?> -
                <?php echo $libro->ISBN; ?> -
                <?php echo $libro->editorial;  ?>   -
                <?php echo $libro->edicion; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("Libros","borrar"); ?>&id=<?php echo $libro->id; ?>" class="btn btn-danger">Borrar</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="<?php echo $libro->ISBN; ?>">INFO</button>
                </div>
                <hr/>
            <?php } ?>
        </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>


    <footer class="col-lg-12">
        <hr/>
        Desarrollo de aplicaciones empresariales ITL  - <a href="#">Github</a> - Copyright &copy; <?php echo  date("Y"); ?>
        <a href="<?php echo $helper->url("usuarios", "logout");?>"> Cerrar sesion </a>
    </footer>
    </div>
    <script src="view/js/libroView.js" ></script>
</body>
</html>