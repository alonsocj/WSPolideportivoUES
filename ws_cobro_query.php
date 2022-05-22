<?php
$idcobro=$_REQUEST['idcobro'];
include('conexion.php');
$con=conectar();
$registros=mysql_query("SELECT * FROM COBRO WHERE idcobro=".$idcobro."",$con) or
die("Problemas en el select:".mysql_error());
$filas=array();
while ($reg=mysql_fetch_assoc($registros))
{
$filas[]=$reg;
}
echo json_encode($filas);
mysql_close($con);
?>