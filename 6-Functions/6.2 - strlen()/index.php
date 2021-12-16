<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot(){
    $voornaam = "Carl";
    $achternaam = "Johnsen";
    $geheleNaam= "Mijn naam is $voornaam $achternaam";
    echo strtoupper($geheleNaam);
}

mijnNaamIsGroot();

?>