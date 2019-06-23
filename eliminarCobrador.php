<?php
  include("database.php");
  $codigo=$_REQUEST['id'];
  $mysql->query("DELETE FROM cobradores where idCobrador=$codigo");
  header('location:buscarCobrador.html');
?>