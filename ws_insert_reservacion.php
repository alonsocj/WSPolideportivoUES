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

$servidor="localhost";
$usuario="id19008253_grupo10";
$password="|y|7N<u4MKVL!O*R";
$baseDatos="id19008253_polideportivoues";

$respuesta=array('resultado'=>0);
json_encode($respuesta);

$conexion=mysql_connect($servidor,$usuario,$password) or
die ("Problemas en la conexion");
mysql_select_db($baseDatos,$conexion)
 or die("Problemas en la seleccion de la base de datos");

$query = "INSERT INTO RESERVACION VALUES('".$idReservacion."','".$idCobro."','".$idPersona."','".$idTipoR."','".$idEvento."','".$idPeriodoReserva."','".$idHorario."','".$idLocal."','".$fechaRegistro."');";

$resultado = mysql_query($query) or die(mysql_error());

//Si la respuesta es correcta enviamos 1 y sino enviamos 0
if(mysql_affected_rows() == 1)
 $respuesta=array('resultado'=>1);
echo json_encode($respuesta);
mysql_close($conexion);
?>
