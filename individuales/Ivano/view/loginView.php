<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAEMP</title>

    <!-- BOOTSTRAP -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    

</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <form action="<?php echo $helper->url("Login","login"); ?>" method="post" class="row">
                <label for="idMail" class="form-label">Correo:</label>
                <input name="mail" type="email" class="form-control" id="idMail" placeholder="Ingresa tu correo">
                <label for="idPass" class="form-label">Contraseña:</label>
                <input name="pass" type="password" class="form-control" id="idPass" placeholder="Ingresa tu contraseña">
                <input type="submit" value="INGRESAR" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>