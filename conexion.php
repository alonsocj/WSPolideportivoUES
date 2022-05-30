<?php
function conectar() {
    $user = "id19008253_grupo10";
    $pass = "|y|7N<u4MKVL!O*R";
    $server = "localhost";
    $db = "id19008253_polideportivoues";
    $conexion = mysql_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos".mysql_error());
    mysql_select_db($db,$conexion) or die ("Error al seleccionar la base de datos".mysql_error());
    return $conexion;
}
