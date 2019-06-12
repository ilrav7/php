<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task3/app.php');

$engineer = new Engineer;
$box = new BlackBox;
$plane = new Plane($box);
$plane->flyAndCrush();


$engineer->takeBox($plane);
$engineer->decodeBox();

$box2 = new BlackBox;
$newPlane = new NewPlane($box2);
$newPlane->flyAndCrush();

$engineer->takeBox($newPlane);
$engineer->decodeBox();

?>