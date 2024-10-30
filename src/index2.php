<?php
//? Cargar el archivo JSON
$jsonFilePath = 'falseData_rooms.json'; 
$jsonData = file_get_contents($jsonFilePath);

//? Verifica si la lectura fue exitosa
if ($jsonData === false) {
    die('Error al leer el archivo JSON');
}

//? Decodifica el JSON en un array de PHP
$rooms = json_decode($jsonData, true);

//? Verifica si la decodificación fue exitosa
if ($rooms === null) {
    die('Error al decodificar el JSON');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>
<body>
    <h1>Lista de Habitaciones</h1>
    <pre><?php print_r($rooms); ?></pre>
</body>
</html>
