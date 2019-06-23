<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listado de Pasajeros</title>
	<link rel="stylesheet"  href="css/tabla.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
</head>
<body>
<table>

<thead>
<tr>
	<td>Código</td>
	<td>Nombre</td>
	<td>Teléfono</td>
    <td>Email</td>
    <td>Mensaje</td>
</tr>
</thead>
<?php
include("database.php");
$usuarios = $mysql->query("select * from pasajero");
foreach($usuarios as $c)
{
	echo "<tr>
		<td>{$c['idPasajero']}</td>
		<td>{$c['nombre']}</td>
		<td>{$c['telefono']}</td>
        <td>{$c['email']}</td>
        <td>{$c['mensaje']}</td>";
	echo "<td><a href='#ex1' rel='modal:open'>Ver</a></td>";
	echo "<td><a href='actualizarPasajero.php?id={$c['idPasajero']}'>Modificar</a></td>";
	echo "<td><a href='eliminarPasajero.php?id={$c['idPasajero']}'>Eliminar</a></td>";	
	echo "</tr>";
}
?>
</table>
<div id="ex1" class="modal f1-modal">
	<center><h2>Descripción</h2></center>
	<div>
  		<center><img src="img/pasajero.jpg"></center>
	</div>
	<center><p>Pasajero</p></center>
</div>

<a href="registrarEmp.php">Adicionar Empleados</a>
<a href="central.php">Regresar</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</body>
</html>