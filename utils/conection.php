<?php
$config = require DIR . '/../config.php';

function db_connection() {
    global $config;
    $host = $config['db_local'];
    $user = $config['db_user'];
    $password = $config['db_pass'];
    $database = $config['db_name'];

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}

function load_rooms() {
    $conn = db_connection();

    $query = "SELECT id, room_type, rate, discount, number FROM rooms"; 
    $result = $conn->query($query);

    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }

    $conn->close();

    return $rooms;
}

function load_rooms_by_type($searchTerm) {
    $conn = db_connection();
    print_r ($searchTerm . "asdasd");
    $searchTerm = $conn->real_escape_string($searchTerm);
    $query = "SELECT id, room_type, rate, number, discount FROM rooms WHERE room_type LIKE '%$searchTerm%'"; 
    $result = $conn->query($query);

    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }

    $conn->close();

    return $rooms;
}

function load_room(int $id) {
    $conn = db_connection();

    $stmt = $conn->prepare("SELECT id, room_type, number, rate, discount FROM rooms WHERE id = ?");

    // Link param
    $stmt->bind_param("i", $id); 

    $stmt->execute();

    $result = $stmt->get_result();

    // Check if any room was found
    if ($result->num_rows === 0) {
        return null;
    }

    $room = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    return $room;
}

?>