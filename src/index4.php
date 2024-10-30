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

//? Leer el parámetro 'id' de la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

//? Buscar la habitación con el ID correspondiente
$roomFound = null;
foreach ($rooms as $room) {
    if ($room['room_id'] === $id) {
        $roomFound = $room;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Habitación</title>
</head>
<body>
    <h1>Detalle de la Habitación</h1>

    <?php if ($roomFound): ?>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($roomFound['room_type']); ?></p>
        <p><strong>Number:</strong> <?php echo htmlspecialchars($roomFound['room_number']); ?></p>
        <p><strong>Price:</strong> $<?php echo htmlspecialchars($roomFound['room_price']); ?></p>
        <p><strong>Discount:</strong> <?php echo htmlspecialchars($roomFound['room_discount']); ?>%</p>
    <?php else: ?>
        <p>Habitación no encontrada.</p>
    <?php endif; ?>
</body>
</html>
