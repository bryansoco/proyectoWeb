<?php
  include("database.php");
  $codigo=$_REQUEST['id'];
  $mysql->query("DELETE FROM pasajero where idPasajero=$codigo");
  header('location:listadoPasajero.php');
?>