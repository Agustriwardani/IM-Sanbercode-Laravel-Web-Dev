<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';


$sheep = new Animal("shaun");
echo "Name : " . $sheep->get_name() . "<br>";
echo "legs : " . $sheep->get_legs() . "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded() . "<br><br>";


$frog = new Frog("buduk");
echo "Name : " . $frog->get_name() . "<br>";
echo "legs : " . $frog->get_legs() . "<br>";
echo "cold blooded : " . $frog->get_cold_blooded() . "<br>";
echo "Jump : " . "Hop Hop" . "<br><br>";


$ape = new Ape("kera sakti");
echo "Name : " . $ape->get_name() . "<br>";
echo "legs : " . $ape->get_legs() . "<br>";
echo "cold blooded : " . $ape->get_cold_blooded() . "<br>";
echo "Yell : " . "Auooo" . "<br>";
