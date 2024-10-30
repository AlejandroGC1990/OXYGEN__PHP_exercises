<?php

include_once __DIR__ . '/utils/mysql.php';
$rooms = load_rooms();

$blade = include __DIR__ . '/config/setup.php';
echo $blade->run("rooms", ["rooms" => $rooms]);
