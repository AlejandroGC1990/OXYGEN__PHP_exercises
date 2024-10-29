<?php
include DIR . '/utils/connection.php';

$rooms = loadrooms();

includeonce __DIR . '/views/rooms_template.php';

?>
