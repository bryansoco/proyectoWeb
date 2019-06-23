<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRAR CHOFER</title>

    <link rel="stylesheet" href="css/chofer.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/chofer.js"></script>
</head>
  <body>

  <section class="form_wrap">

    <section class="chofer_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>INFORMACIÓN<br>DEL CHOFER</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> realstar@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +51 902-866-625</p>
        </section>
    </section>

    <form class="form_chofer" action="registrarChofer.php" method="POST">
    <h2>REGISTRAR CHOFER</h2>
    <div class="user_info">
        <label for="nombre">Nombres *</label>
        <input type="text" id="nombre" name="nombre">

        <label for="apellidoPaterno">Apellido Paterno *</label>
        <input type="text" id="apellidoPaterno" name="apellidoPaterno">

        <label for="apellidoMaterno">Apellido Materno *</label>
        <input type="text" id="apellidoMaterno" name="apellidoMaterno">

        <label for="dni">DNI *</label>
        <input type="number" id="dni" name="dni"  minlength="8" maxlength="8">

        <label for="email">Correo electrónico *</label>
        <input type="text" id="email" name="email">

        <label for="fechaNac">Fecha de nacimiento *</label>
        <input type="date" id="fechaNac" name="fechaNac">

        <input type="submit" value="Registrar" id="btnSend" name="btnSend">
    </div>
    </form>
    <?php
  	if(isset($_POST['btnSend']))
  	{
  		include("database.php");
     	$nombre=$_POST['nombre'];
      $apellidoPaterno=$_POST['apellidoPaterno'];
      $apellidoMaterno=$_POST['apellidoMaterno'];
      $dni=$_POST['dni'];
      $email=$_POST['email'];
      $fechaNac=$_POST['fechaNac'];
	$mysql->query("INSERT INTO choferes (nombre,apellidoPaterno,apellidoMaterno,dni,email,fechaNac) values ('$nombre','$apellidoPaterno','$apellidoMaterno','$dni','$email','$fechaNac')");
  	}
  ?>
    </section>
  </body>
</html>