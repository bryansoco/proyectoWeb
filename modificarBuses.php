<?php 
include_once("database.php");
   $id     = $_REQUEST["codigo"];
   $idbus   = $_REQUEST["codigo"];
   $numBus = $_REQUEST["numBus"];
   $ruta = $_REQUEST["ruta"];
   $numPlaca = $_REQUEST["numPlaca"];

   $sqlstr = "update buses ";
   $sqlstr.= "       set numBus='".$numBus."', ";
   $sqlstr.= "        ruta='".$ruta."', ";
   $sqlstr.= "        numPlaca='".$numPlaca."', ";
   $sqlstr.= " where idBus=".$idbus;
   //echo "SQLSTR: ".$sqlstr."<br/>\n";
   $i = $conn->query($sqlstr);

   header("Location: listadoBuses.php");
?>