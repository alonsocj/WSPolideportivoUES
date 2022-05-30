<?php
$idReservacion=$_REQUEST['IDRESERVACION'];
$idCobro=$_REQUEST['IDCOBRO'];
$idPersona=$_REQUEST['IDPERSONA'];
$idTipoR=$_REQUEST['IDTIPOR'];
$idEvento=$_REQUEST['IDEVENTO'];
$idPeriodoReserva=$_REQUEST['IDPERIODORESERVA'];
$idHorario=$_REQUEST['IDHORARIO'];
$idLocal=$_REQUEST['IDLOCAL'];
$fechaRegistro=$_REQUEST['FECHAREGISTRO'];

include('conexion.php');
$con=conectar();

$query = "INSERT INTO RESERVACION VALUES('".$idReservacion."','".$idCobro."','".$idPersona."','".$idTipoR."','".$idEvento."','".$idPeriodoReserva."','".$idHorario."','".$idLocal."','".$fechaRegistro."');";

$resultado = mysql_query($con, $query) or die(mysql_error($con));

//Si la respuesta es correcta enviamos 1 y sino enviamos 0
if(mysql_affected_rows($con) == 1)
 $respuesta=array('resultado'=>1);
echo json_encode($respuesta);
$con->close();
?>
