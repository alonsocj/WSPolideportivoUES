<?php
$idevento = $_REQUEST['idevento'];
$idtipoe = $_REQUEST['idtipoe'];
$nomevento = $_REQUEST['nomevento'];
$costoevento = $_REQUEST['costoevento'];
$cantidadautorizada = $_REQUEST['cantidadautorizada'];
include('conexion.php');
$con = conectar();

$sql = "INSERT INTO EVENTO (IDEVENTO, IDTIPOE, NOMEVENTO, COSTOEVENTO, CANTIDADAUTORIZADA) VALUES ('$idevento', '$idtipoe', '$nomevento', '$costoevento', '$cantidadautorizada')";
$resultado = mysql_query($sql) or die(mysql_error());
if (mysql_affected_rows() == 1)
    $respuesta = array('resultado' => 1);
echo json_encode($respuesta);
mysql_close($con);
