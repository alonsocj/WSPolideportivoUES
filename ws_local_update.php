<?php
$idlocal = $_REQUEST['idlocal'];
$idhorario = $_REQUEST['idhorario'];
$disponibilidad = $_REQUEST['disponibilidad'];
include('conexion.php');
$con = conectar();
$sql = "UPDATE horarioslocales SET disponibilidad = '$disponibilidad' WHERE idhorario = '$idhorario' AND idlocal = '$idlocal'";
$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));
if (mysqli_affected_rows($con) == 1)
    $respuesta = array('resultado' => 1);
echo json_encode($respuesta);
$con->close();
