<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar bus</title>

    <link rel="stylesheet" href="css/bus.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bus.js"></script>
</head>
 <body>

	<section class="form_wrap">
    <section class="bus_info">
        <section class="info_title">
            <span class="fa fa-bus"></span>
            <h2>INFORMACIÓN<br>DE BUS</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> realstar@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +51 902-866-625</p>
        </section>
    </section>
	
  	<form method="POST" action="registrarBuses.php" class="form_bus" >
	  <h2>Registrar un Bus</h2>
      <div class="user_info">
	  <label for="numBus">Número del Bus *</label>
        <input type="number" id="numBus" name="numBus">

        <label for="ruta">Ruta *</label>
        <input type="text" id="ruta" name="ruta">

        <label for="numPlaca">Serie de placa *</label>
        <input type="text" id="numPlaca" name="numPlaca">

		<input type="submit" value="Registrar" id="btnSend" name="btnSend">
	   </div>
  </form>
  <?php
  	if(isset($_POST['btnSend']))
  	{
  		include("database.php");
     	$numBus=$_POST['numBus'];
  		$ruta=$_POST['ruta'];
        $numPlaca=$_POST['numPlaca'];
          
	$mysql->query("INSERT INTO buses (numBus,ruta,numPlaca) values ('$numBus','$ruta','$numPlaca')");
  	}
  ?> 
</section>
</body>
</html>