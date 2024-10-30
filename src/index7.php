<form>
    <label for="search">Escribe el tipo de habitación</label>
    <input type="text" id="search" name="search"></input>
    <button type="submit">Enviar</button>
</form>


<?php 
    includeonce _DIR . '/utils/connection.php';

    if (isset($_GET["search"]) && !empty($_GET["search"])){
        $searchTerm = htmlspecialchars($GET["search"]);
        $rooms = loadrooms_by_type($searchTerm);
    } else {
        $rooms = load_rooms();
    }

    include_once __DIR . '/views/rooms_template.php';
?>