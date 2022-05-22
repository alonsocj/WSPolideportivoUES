<?php
function conectar() {
    $user = "";
    $pass = "";
    $server = "";
    $db = "";
    $conexion = mysql_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos".mysql_error());
    mysql_select_db($db, $conexion) or die ("Error al seleccionar la base de datos".mysql_error());
    return $conexion;
}
?>