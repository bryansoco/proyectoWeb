<?php
include("database.php");

$tabla ="";
$query="select * from cobradores order by idCobrador";

if (isset($_POST['cobradores'])) 
{
 $q=$mysql->real_escape_string($_POST['cobradores']);
 $query="select * from cobradores where 
        idCobrador LIKE '%".$q."%' OR
        nombre LIKE '%".$q."%' OR
        apellidoPaterno LIKE '%".$q."%' OR
        apellidoMaterno LIKE '%".$q."%' OR
        dni LIKE '%".$q."%' OR
        email LIKE '%".$q."%' OR
        fechaNac LIKE '%".$q."%' ";
}
$buscarCobradores=$mysql->query($query);
if ($buscarCobradores->num_rows > 0) 
{
    $tabla.=
    '<table class="table">
        <tr class="bg-primary">
            <td> ID COBRADOR </td>
            <td> NOMBRE </td>
            <td> APELLIDO PATERNO </td>
            <td> APELLIDO MATERNO </td>
            <td> DNI </td>
            <td> EMAIL </td>
            <td> FECHA DE NACIMIENTO </td>
            <td> ACCIÓN </td>
        </tr>';

    while ($filaCobradores= $buscarCobradores->fetch_assoc())
        {
            $tabla.=
            '<tr>
                <td>'.$filaCobradores['idCobrador'].'</td>
                <td>'.$filaCobradores['nombre'].'</td>
                <td>'.$filaCobradores['apellidoPaterno'].'</td>
                <td>'.$filaCobradores['apellidoMaterno'].'</td>
                <td>'.$filaCobradores['dni'].'</td>
                <td>'.$filaCobradores['email'].'</td>
                <td>'.$filaCobradores['fechaNac'].'</td>
                <td><a href="#ex1" rel="modal:open">Ver</a></td>
                <td><a href="actualizarCobrador.php?id={$filaCobradores["idCobrador"]}">Modificar</a></td>
                <td><a href="eliminarCobrador.php?id={$filaCobradores["idCobrador"]}">Eliminar</a></td>
            </tr>';
        }
        $tabla.='</table>';
}else {
    $tabla="No se encontraron resultados de su búsqueda.";
    }

echo $tabla;
?>
