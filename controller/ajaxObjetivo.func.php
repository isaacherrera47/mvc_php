<?php
include ('../config/database.php');
include ('../res/element.res.php');

$tipo = $_POST['tipo'];
$detalle = $_POST['detalle'];

if ($tipo == 'C'){
    $sql = 'INSERT INTO objetivo(detalle) VALUES (:detalle)';
    $stmt = $conexion->prepare($sql);
    $stmt->execute(array(':detalle' => $detalle));
    $id = $conexion->lastInsertId();
    echo getRow($detalle, $id);
}

if ($tipo == 'U') {
    $id = $_POST['id'];
    $sql = 'UPDATE objetivo SET detalle = :detalle WHERE id=:id';
    $stmt = $conexion->prepare($sql);
    $stmt->execute(array(':detalle' => $detalle, ':id' => $id));
}

if ($tipo == 'D') {
    $id = $_POST['id'];
    $sql = 'DELETE FROM objetivo WHERE id = :id';
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
}