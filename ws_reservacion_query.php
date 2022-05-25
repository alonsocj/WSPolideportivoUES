<?php
$year=$_REQUEST['year'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
include('conexion.php');
$con=conectar();
$registros=mysql_query("Select * from reservacion where FECHAREGISTRO ='".$year."-".$month."-".$day."'",$con) or
die("Problemas en el select:".mysql_error());
$filas=array();
while ($reg=mysql_fetch_assoc($registros))
{
$filas[]=$reg;
}
echo json_encode($filas);
mysql_close($con);
?>
