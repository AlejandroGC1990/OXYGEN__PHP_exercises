<?php 

if ($rooms) {
    echo "<h2>Habitación Encontrada:</h2>";
    echo "<p><strong>Nombre:</strong> " . $rooms['room_type'] . "</p>";
    echo "<p><strong>Número:</strong> " . $rooms['number'] . "</p>";
    echo "<p><strong>Precio:</strong> $" . $rooms['rate'] . "</p>";
    echo "<p><strong>Descuento:</strong> " . $rooms['discount'] . "%</p>";
} else {
    echo "<p>No se encontró ninguna habitación con ese ID.</p>";
}
?>