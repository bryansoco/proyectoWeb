<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar pasajero</title>

    <link rel="stylesheet" href="css/pasajero.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/pasajero.js"></script>
</head>
<body>


<section class="form_wrap">

    <section class="pasajero_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>INFORMACIÓN<br>DE PASAJERO</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> realstar@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +51 902-866-625</p>
        </section>
    </section>

<form action="registrarPasajero.php" class="form_pasajero" method="POST">
    <h2>Registrar un pasajero</h2>
    <div class="user_info">
        <label for="nombre">Nombres *</label>
        <input type="text" id="nombre" name="nombre">

        <label for="celular">Telefono / Celular *</label>
        <input type="text" id="celular" name="celular">

        <label for="email">Correo electronico *</label>
        <input type="text" id="email" name="email">

        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje" name="mensaje"></textarea>

        <input type="submit" value="Enviar Mensaje" id="btnSend" name="btnSend">
    </div>
</form>
<?php
  	if(isset($_POST['btnSend']))
  	{
  		include("database.php");
     	$nombre=$_POST['nombre'];
  		$celular=$_POST['celular'];
  	    $email=$_POST['email'];
        $mensaje=$_POST['mensaje'];
	$mysql->query("INSERT INTO pasajero (nombre,telefono,email,mensaje) values ('$nombre','$celular','$email','$mensaje')");
  	}
  ?> 
</section>
</body>
</html>