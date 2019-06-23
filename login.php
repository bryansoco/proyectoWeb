<?php

  session_start();
  require 'database.php';

  if(isset($_SESSION['user_id'])){
    header('Location: /proyecto');
  }
  

  if (!empty($_POST['nombre']) && !empty($_POST['apellidoPaterno']) && !empty($_POST['apellidoMaterno'])  && !empty($_POST['dni']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT idUsuario, email, password FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['idUsuario'];
      header('Location: /proyecto');
    } else {
      $message = 'No es válido';
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/login.css" th:href="@{css/login.css}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
  

    <form class="form-signin" action="central.php" method="POST">

    <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
    <div class="modal-content">
      <div class="col-12 user-img">
        <img src="img/login.jpg">
      </div>
      <form class="col-12">
        <div class="form-group" id="user-group">
        <input id="email" type="text" class="form-control" placeholder="Ingrese su Email" required="" autofocus="">
        </div>
        <div class="form-group" id="pass-group">
        <input id="password" type="password" class="form-control" placeholder="Ingrese su Password" required="" autofocus="">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Ingresar</button>
      </form>
      <div class="col-12 forgot">
        <a href="#">Recordar Contraseña</a>
      </div>
    </div>
    </div>
    </div>
  
    <p class="mt-5 mb-3 text-muted text-center">© 2005 </p>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>   
  </body>
</html>
