<?php
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$day = $_REQUEST['day'];
include('conexion.php');
$con = conectar();
$sql = "SELECT * FROM horarioslocales WHERE fecha_modificado>'" . $year . "-" . $month . "-" . $day . "'";
$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));
$filas = array();
while ($reg = mysqli_fetch_assoc($resultado)) {
    $filas[] = $reg;
}

echo json_encode($filas);
mysqli_close($con);
