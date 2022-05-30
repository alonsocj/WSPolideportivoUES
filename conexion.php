<?php
function conectar() {
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "polideportivo";
    $conexion = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos".mysqli_error($conexion));
    mysqli_select_db($conexion,$db) or die ("Error al seleccionar la base de datos".mysqli_error($conexion));
    return $conexion;
}
