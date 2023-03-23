<?php

function Conexion ()

{
    $host= 'localhost';
    $user= 'root';
    $pass= '';
    $db= 'db_adm_personas';

    $conexion=mysqli_connect($host, $user, $pass, $db);

    if ($conexion) {
        echo "Base de datos conectada";
    } else {
        echo "No se estableció la conexión con la base de datos";
    }

    return $conexion;
}
