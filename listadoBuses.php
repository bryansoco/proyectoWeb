<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listado de Buses</title>
	<link rel="stylesheet"  href="css/tabla.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

</head>
<body>
<form action="buscar.php" method="POST" class="form_seach">
<input type="text" name="busqueda" id="busqueda">
<input type="submit" value="Buscar" class=btn_search>
</form>
<table>
	<thead>
<tr>
	<td>CodBus	</td>
	<td>Número</td>
	<td>Ruta</td>
	<td>Serie de Placa</td>
</tr>
</thead>
<?php
include("database.php");
$personas = $mysql->query("select * from buses");
foreach($personas as $c)
{
	echo "<tr>
		<td>{$c['idBus']}</td>
		<td>{$c['numBus']}</td>
		<td>{$c['ruta']}</td>
		<td>{$c['numPlaca']}</td>";

	echo "<td><a href='#ex1' rel='modal:open'>Ver</a></td>";
	echo "<td><a href='actualizarBuses.php?id={$c['idBus']}'>Modificar</a></td>";
	echo "<td><a href='eliminarBuses.php?id={$c['idBus']}'>Eliminar</a></td>";
	echo "</tr>";
}
?>
</table>
<div id="ex1" class="modal f1-modal">
	<center><h2>Descripción</h2></center>
	<div>
  		<center><img src="imgBus/10.jpg" style="width:100%"></center>
	</div>
	<center><p>Bus</p></center>
</div>
<a href="registrarBuses.php">Adicionar Buses</a>
<a href="central.php">Regresar</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</body>
</html>