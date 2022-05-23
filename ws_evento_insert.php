<?php
$idevento = $_REQUEST['idevento'];
$idtipoe = $_REQUEST['idtipoe'];
$nomevento = $_REQUEST['nomevento'];
$costoevento = $_REQUEST['costoevento'];
$cantidadautorizada = $_REQUEST['cantidadautorizada'];
include('conexion.php');
$con = conectar();

$sql = "INSERT INTO evento (idevento, idtipoe, nomevento, costoevento, cantidadautorizada) VALUES ('$idevento', '$idtipoe', '$nomevento', '$costoevento', '$cantidadautorizada')";
$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));
if (mysqli_affected_rows($con) == 1)
    $respuesta = array('resultado' => 1);
echo json_encode($respuesta);
$con->close();
