<?php 
include_once("database.php");
   $id     = $_REQUEST["id"];
   $idcobrador   = $_REQUEST["codigo"];
   $nombre = $_REQUEST["nombre"];
   $apellidoPaterno = $_REQUEST["apellidoPaterno"];
   $apellidoMaterno = $_REQUEST["apellidoMaterno"];
   $dni = $_REQUEST["dni"];
   $email = $_REQUEST["email"];
   $fechaNac = $_REQUEST["fechaNac"];

   $sqlstr = "update cobradores ";
   $sqlstr.= "       set nombre='".$nombre."', ";  
   $sqlstr.= "        apellidoPaterno='".$apellidoPaterno."', ";
   $sqlstr.= "        apellidoMaterno='".$apellidoMaterno."', ";
   $sqlstr.= "        dni='".$dni."', ";
   $sqlstr.= "        dni='".$email."', ";
   $sqlstr.= "        dni='".$fechaNac."', ";
   $sqlstr.= " where idCobrador=".$idcobrador;
   //echo "SQLSTR: ".$sqlstr."<br/>\n";
   $i = $mysql->query($sqlstr);

   header("Location: listadoCobrador.php");
?>