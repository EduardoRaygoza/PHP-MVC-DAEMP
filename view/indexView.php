<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>DAEMP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BiblioLeon</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Usuarios</a>
        <a class="nav-link" href="<?php echo $helper->url("libros","index"); ?>">Libros</a>
        <a class="nav-link" href="<?php echo $helper->url("prestamo","index"); ?>">Prestamos</a>
        <a class="nav-link" href="<?php echo $helper->url("autor","index"); ?>">Autores</a>
      </div>
    </div>
  </div>
</nav>

        <form action="<?php echo $helper->url("usuarios","create"); ?>" method="post" class="col-lg-12">
            <h3>Añadir usuario</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control"/>
            Apellido: <input type="text" name="apellido" class="form-control"/>
            Email: <input type="text" name="email" class="form-control"/>
            Contraseña: <input type="password" name="password" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
         
        <div class="col-lg-12">
            <h3>Usuarios</h3>
            <hr/>
        </div>
        <section class="col-lg-12 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->apellido; ?> -
                <?php echo $user->email; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
        <footer class="col-lg-12">
            <hr/>
           Desarrollo de aplicaciones empresariales ITL  - <a href="#">Github</a> - Copyright &copy; <?php echo  date("Y"); ?>
           <a href="<?php echo $helper->url("usuarios", "logout");?>"> Cerrar sesion </a>
        </footer>
        </nav>
    </body>
</html>