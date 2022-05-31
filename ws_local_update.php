<?php
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$day = $_REQUEST['day'];
include('conexion.php');
$con = conectar();
$sql = "SELECT * FROM HORARIOSLOCALES WHERE fecha_modificado>'" . $year . "-" . $month . "-" . $day . "'";
$resultado = mysql_query($sql) or die(mysql_error());
$filas = array();
while ($reg = mysql_fetch_assoc($resultado)) {
    $filas[] = $reg;
}

echo json_encode($filas);
mysql_close($con);
