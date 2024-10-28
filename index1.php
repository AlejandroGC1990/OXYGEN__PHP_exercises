<?php

$rooms = [
    [
        "ID" => 1,
        "Name" => "Suite Deluxe",
        "Number" => "101",
        "Price" => 150.00,
        "Discount" => 10 
    ],
    [
        "ID" => 2,
        "Name" => "Habitación Doble",
        "Number" => "102",
        "Price" => 100.00,
        "Discount" => 15
    ],
    [
        "ID" => 3,
        "Name" => "Habitación Individual",
        "Number" => "103",
        "Price" => 80.00,
        "Discount" => 5
    ]
];

echo "<pre>";
print_r($rooms);
echo "</pre>";

?>