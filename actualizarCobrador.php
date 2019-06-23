<?php
include ("database.php");

$cobradores="select * from cobradores";
$resCobradores=$mysql->query($cobradores);
?>
<!DOCTYPE html> 
<html lang='es'>
<head>
	<title>ACTUALIZAR COBRADORES</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
	<header>
		<div class="alert alert-info">
			<h2>ACTUALIZAR REGISTROS DE COBRADORES</h2>
		</div>
	</header>

	<section>
		<form method="POST">
			<table class="table">
				<tr>
					<th> ID_COBRADOR</th>
					<th> NOMBRE </th>
           	 		<th> APELLIDO PATERNO </th>
            		<th> APELLIDO MATERNO </th>
            		<th> DNI </th>
            		<th> EMAIL </th>
            		<th> FECHA DE NACIMIENTO </th>
				</tr>
		<?php
		foreach ($registroCobradores as $resCobradores)
		{
			echo'<tr>
				<td hidden><input name="idCobra[] value="'.$registroCobradores['idCobrador'].'" /></td>

				<td><input name="idCobrado['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['idCobrador'].'"/></td>
				<td><input name="nom['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['nombre'].'"/></td>
				<td><input name="apePa['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['apellidoPaterno'].'"/></td>
				<td><input name="apeMa['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['apellidoMaterno'].'"/></td>
				<td><input name="numDoc['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['dni'].'"/></td>
				<td><input name="correo['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['email'].'"/></td>
				<td><input name="fechaNa['.$registroCobradores['idCobrador'].']" value="'.$registroCobradores['fechaNac'].'"/></td>
				<tr>';
		}
		?>
			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9">
		</form>

		<?php
			if (isset($_POST['actualizar'])) {

				foreach ($_POST['idCobra'] as $id) {
					$editID=mysqli_real_escape_string($mysql, $_POST['idCobrado'][$id]);
					$editNom=mysqli_real_escape_string($mysql, $_POST['nom'][$id]);
					$editApePat=mysqli_real_escape_string($mysql, $_POST['apePa'][$id]);
					$editApeMat=mysqli_real_escape_string($mysql, $_POST['apeMa'][$id]);
					$editNumDoc=mysqli_real_escape_string($mysql, $_POST['numDoc'][$id]);
					$editCorreo=mysqli_real_escape_string($mysql, $_POST['correo'][$id]);
					$editFechaNac=mysqli_real_escape_string($mysql, $_POST['fechaNa'][$id]);
				}
				if ($actualizar==true) {
					echo "FUNCIONA! <a href='actualizarCobrador.php'>Click Aquí</a>";
				}
				else{
					echo "NO FUNCIONA!";
				}
			}
		?>
	</section>
</body>





<?php
include("database.php");
$id = $_REQUEST["id"];
$personas = $mysql->query("select * from cobradores where idCobrador=$id");
  foreach($personas as $fila)
?>
<body>
<form name='cobradores' action='modificarCobrador.php' method='post'>
<table border='1'>
<tr><td>Codigo Cobrador</td>
	  <td><input type='text' name='codigo' 
	  	         value='<?php echo $filaCobradores["idCobrador"]?>' /></td>
                 </tr>
     <tr><td>Nombre</td>
	  <td><input type='text' name='nombre' 
	  	         value='<?php echo $fila["nombre"]?>' /></td>
	  </tr>
      <tr><td>Apellido Paterno</td>
	  <td><input type='text' name='apellidoPaterno' 
	  	         value='<?php echo $fila["apellidoPaterno"]?>' /></td>
	  </tr>
        <tr><td>Apellido Materno</td>
	  <td><input type='text' name='apellidoMaterno' 
	  	         value='<?php echo $fila["apellidoMaterno"]?>' /></td>
	  </tr> 
      <tr><td>DNI</td>
	  <td><input type='text' name='dni' 
	  	         value='<?php echo $fila["dni"]?>' /></td>
	  </tr> 
      <tr><td>Email</td>
	  <td><input type='text' name='email' 
	  	         value='<?php echo $fila["email"]?>' /></td>
	  </tr> 
<tr><td colspan='2'>
	  <input type='submit' value='MODIFICAR' /></td>
	  </tr>
</table>
</form>
</body>
</html>