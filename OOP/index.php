<?php
require_once("animal.php");
require_once("frog.php");
require_once("ape.php");

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>"; 
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>";

$frog = new Frog("buduk");

echo "Name : " . $frog->name . "<br>";
echo "Legs : " . $frog->legs . "<br>";
echo "Cold Blooded : " . $frog->cold_blooded . "<br>";
echo "Jump : " . $frog->jump() . "<br><br>"; ; 

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell() . "<br>" ; 

?>