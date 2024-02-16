<?php
// Auteur: Emre Bas

 require_once("kamers.php");

 require_once("huis.php");

 $house = new House();

$room1 = new Room(5.2, 5.1, 5.5);
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);

echo "Inhoud Kamers:\n" . "<br>". "<br>";

foreach ($house->getRooms() as $index => $room) {

echo "Lengte: " . $room->getLength() . "m Breedte: " . $room->getWidth() . "m Hoogte: " . $room->getHeight() . "m " . "<br>";

}
echo "<br>";
echo "Volume Totaal = " . $house->getTotalVolume() . "m^3\n";
echo "<br>";
echo "Prijs van het huis is= €" . number_format($house->calculatePrice(), 2);
?>