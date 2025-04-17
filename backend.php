<?php
// backend.php

// Leer los datos JSON recibidos
$input = json_decode(file_get_contents("php://input"), true);

// Validar que se recibieron los campos
if (!isset($input['usuario']) || !isset($input['clave'])) {
    echo json_encode(["mensaje" => "Faltan datos"]);
    exit;
}

$usuario = trim($input['usuario']);
$clave = trim($input['clave']);

// Validación muy básica
if ($usuario === "" || $clave === "") {
    echo json_encode(["mensaje" => "Los campos no pueden estar vacíos"]);
    exit;
}

// Respuesta de prueba
echo json_encode(["mensaje" => "Datos recibidos correctamente"]);
?>