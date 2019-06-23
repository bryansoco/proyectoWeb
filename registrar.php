<?php

if ($_POST)
{
	require("mysql.php"); 
	$pdo = new db();
	$nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST["apellidoMaterno"];
    $numDoc = $_POST["numDoc"];
    $email = $_POST["email"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

	try
	{
		$pdo->mysql->beginTransaction();
		$pst = $pdo->mysql->prepare("insert into usuarios values (null, :nombre, :apellidoPaterno, :apellidoMaterno, :numDoc, :email, :password)");
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":apellidoPaterno", $apellidoPaterno, PDO::PARAM_STR);
        $pst->bindParam(":apellidoMaterno", $apellidoMaterno, PDO::PARAM_STR);
        $pst->bindParam(":numDoc", $numDoc, PDO::PARAM_STR);
        $pst->bindParam(":email", $email, PDO::PARAM_STR);
        $pst->bindParam(":password", $password, PDO::PARAM_STR);
		$pst->execute();

		$idUsuario = $pdo->mysql->lastInsertId();

		$pst = $pdo->mysql->prepare("insert into buses values (null, {$idUsuario})");
		$pdo->mysql->commit();
		header("Location:listadoEmp.php");
	}
	catch(PDOException $ex)
	{
		$pdo->mysql->rollback();
		echo "El contacto no pudo ser guardado.";
		echo "<a href='#' onclick=javascript:window.history.back()>Regresar</a>"; 
	}


}