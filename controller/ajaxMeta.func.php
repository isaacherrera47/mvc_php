<?php

include ('../config/database.php');
include ('../res/element.res.php');
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

if ($tipo == 'C') {
    $sql = 'INSERT INTO meta(nombre, descripcion) VALUES (:nombre, :descripcion)';
    $stmt = $conexion->prepare($sql);
    $stmt->execute(array(':nombre' => $nombre, ':descripcion' => $descripcion));
    $id = $conexion->lastInsertId();
    echo getCard($nombre,$descripcion,$id);
}

if ($tipo == 'U') {
    $id = $_POST['id'];
    $sql = 'UPDATE meta SET nombre = :nombre , descripcion = :descripcion WHERE id=:id';
    $stmt = $conexion->prepare($sql);
    $stmt->execute(array(':nombre' => $nombre, ':descripcion' => $descripcion, ':id' => $id));
}

if ($tipo == 'D') {
    $id = $_POST['id'];
    $sql = 'DELETE FROM meta WHERE id = :id';
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
}