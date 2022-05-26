<?php

$idEvento=$_REQUEST['idevento'];

//Declaración de conexion de datos
include('conexion.php');
$con=conectar();

$eventos =mysql_query("SELECT * FROM evento WHERE idevento='".$idEvento."'", $con) or
die("Problemas en el select de Evento: ".mysql_error());
$filas=array();

// Obtener un array asociativo
while ($reg = mysql_fetch_assoc($eventos)) {
        $filas[]=$reg;
    }
echo json_encode($filas);

//Cierre de conexión
mysql_close($con);

?>