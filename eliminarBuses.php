<?php
  include("database.php");
  $codigo=$_REQUEST['id'];
 	$conn->query("DELETE FROM buses where idBus=$codigo");
  header('location:listadoBuses.php');
?> 