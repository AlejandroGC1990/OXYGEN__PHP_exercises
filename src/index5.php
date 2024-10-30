<?php
include __DIR__ . '/utils/connection.php';

$rooms = loadrooms();

include_once __DIR__ . '/views/rooms_template.php';

?>
