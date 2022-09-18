<?php

function conectar_db(){
    $servidor = "localhost";//servidor que aloja la bd
    $usuario_bb_dd = "root";//el usuario de la bd
    $password_bb_dd = ""; //password de la bd
    $base_datos = "proyectodaw";//el nombre de la db

    $conexion = new mysqli($servidor, $usuario_bb_dd, $password_bb_dd, $base_datos);
    return $conexion;
}


?>


