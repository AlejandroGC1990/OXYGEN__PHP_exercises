<?php
include DIR . '/utils/connection.php';
include DIR . '/utils/path.php';

$id = (int)getparamid();
$rooms = load_room($id);

include_once __DIR . '/views/room_template.php';

?>