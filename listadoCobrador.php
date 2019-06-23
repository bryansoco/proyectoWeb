<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listado de Cobradores</title>
	<link rel="stylesheet"  href="css/tabla.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
</head>
<body>
<table>

<thead>
<tr>
	<td>Código</td>
	<td>Nombre</td>
	<td>Apellido Paterno</td>
	<td>Apellido Materno</td>
	<td>Nro Documento</td>
	<td>Email</td>
	<td>Fecha de Nacimiento</td>
</tr>
</thead>
<?php
include("database.php");
$usuarios = $mysql->query("select * from cobradores");
foreach($usuarios as $c)
{
	echo "<tr>
		<td>{$c['idCobrador']}</td>
		<td>{$c['nombre']}</td>
		<td>{$c['apellidoPaterno']}</td>
		<td>{$c['apellidoMaterno']}</td>
		<td>{$c['dni']}</td>
		<td>{$c['email']}</td>
		<td>{$c['fechaNac']}</td>";
	echo "<td><a href='#ex1' rel='modal:open'>Ver</a></td>";
	echo "<td><a href='actualizarCobrador.php?id={$c['idCobrador']}'>Modificar</a></td>";
	echo "<td><a href='eliminarCobrador.php?id={$c['idCobrador']}'>Eliminar</a></td>";	
	echo "</tr>";
}
?>
</table>
<div id="ex1" class="modal f1-modal">
	<center><h2>Descripción</h2></center>
	<div>
  		<center><img src="img/3.jpg"></center>
	</div>
	<center><p>COBRADOR</p></center>
</div>

<a href="registrarCobrador.php">Adicionar Cobradores</a>
<a href="central.php">Regresar</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</body>
</html>