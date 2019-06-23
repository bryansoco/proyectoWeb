<!DOCTYPE html>
<html>
<head>
	<title>CRUD PDO</title>
</head>
<body>
<h1>Agenda</h1>
<form method="post" action="registrar.php">
	<p>
		<label>Nombres</label>
		<input type="text" name="nombre" required="true" maxlength="64" minlength="3" placeholder="Nombres">
	</p>
	<p>
		<label>Apellido Paterno</label>
		<input type="text" name="apellidoPaterno" required="true" maxlength="64" minlength="3" placeholder="Apellidos">
	</p>
    <p>
		<label>Apellido Materno</label>
		<input type="text" name="apellidoMaterno" required="true" maxlength="64" minlength="3" placeholder="Apellidos">
	</p>
	<p>
		<label>DNI</label>
		<input type="text" name="numDoc" required="true" maxlength="8" minlength="8" placeholder="Dirección">
	</p>
	<p>
		<label>Email</label><br>
		<input name="email" type="text" placeholder="email" maxlength="256">
	</p>
    <p>
		<label>Password</label><br>
		<input name="password" type="paswword" placeholder="password" maxlength="256">
	</p>
	<input type="submit" value="Guardar">
	<input type="reset" value="Cancelar">
</form>
</body>
</html>