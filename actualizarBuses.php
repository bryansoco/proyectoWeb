<!DOCTYPE html> 
<html lang='es'>
<head>
</head>
<?php
include("database.php");
$id = $_REQUEST["id"];
$personas = $conn->query("select * from buses where idBus=$id");
  foreach($personas as $fila)
?>
<body>
<form name='buses' action='modificarBuses.php' method='post'>
<table border='1'>
<tr><td>Codigo Bus</td>
	  <td><input type='text' name='codigo' 
	  	         value='<?php echo $fila["idBus"]?>' /></td>
                 </tr>
     <tr><td>Número</td>
	  <td><input type='text' name='numBus' 
	  	         value='<?php echo $fila["numBus"]?>' /></td>
	  </tr>
      <tr><td>Ruta</td>
	  <td><input type='text' name='ruta' 
	  	         value='<?php echo $fila["ruta"]?>' /></td>
	  </tr>
        <tr><td>Serie de Placa</td>
	  <td><input type='text' name='numPlaca' 
	  	         value='<?php echo $fila["numPlaca"]?>' /></td>
	  </tr> 
<tr><td colspan='2'>
	  <input type='submit' value='MODIFICAR' /></td>
	  </tr>
</table>
</form>
</body>
</html>