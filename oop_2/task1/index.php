<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task1/app/Pet.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task1/app/Pig.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task1/app/Cow.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task1/app/Chicken.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task1/app/Farm.php');

use App\Pet;
use App\Pig;
use App\Cow;
use App\Chiken;
use App\Farm;


$farm = new Farm;

$pig1 = new Pig;
$pig2 = new Pig;
$cow = new Cow;
$chicken = new Chiken;


$farm->addAnimal($pig1);
$farm->addAnimal($pig2);
$farm->addAnimal($cow);
$farm->addAnimal($chicken);

$farm->rollCall();

