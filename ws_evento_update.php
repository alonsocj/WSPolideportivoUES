<?php

$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$day = $_REQUEST['day'];

include('conexion.php');
$con=conectar();

$eventosfecha = mysql_query("Select * from evento where fecha_modificado>
'".$year."-".$month."-".$day."'",$con) or 
die ("Problemas en el select de evento: " .mysql_error());

$filas = array();
while ($reg = mysql_fetch_assoc($eventosfecha)){
    $filas[] = $reg;
}

echo json_encode($filas);
mysql_close($con);


?>