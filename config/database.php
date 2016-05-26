<?php

/* Conectar a una base de datos ODBC invocando al controlador */
$dsn = 'mysql:dbname=metas;host=localhost';
$usuario = 'root';
$contraseña = '';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}