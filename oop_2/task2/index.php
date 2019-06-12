<?php


require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task2/app/Farm.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task2/app/Farmer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task2/app/pet.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop_2/task2/app/bird.php');

use App\Pet;
use App\Pig;
use App\Cow;
use App\Horse;
use App\Bird;
use App\Chicken;
use App\Turkey;
use App\Goose;

use App\Farm;
use App\BirdFarm;
use App\Farmer;

$farmer = new Farmer;
$farm = new Farm;
$birdfarm = new BirdFarm;


$cow = new Cow;
$pig1 = new Pig;
$pig2 = new Pig;
$chicken = new Chicken;
$turkey1 = new Turkey;
$turkey2 = new Turkey;
$turkey3 = new Turkey;
$horse1 = new Horse;
$horse2 = new Horse;
$goose = new Goose;

$farmer->addAnimal($farm, $cow);
$farmer->addAnimal($farm, $pig1);
$farmer->addAnimal($farm, $pig2);
$farmer->addAnimal($birdfarm, $chicken);
$farmer->addAnimal($birdfarm, $turkey1);
$farmer->addAnimal($birdfarm, $turkey2);
$farmer->addAnimal($birdfarm, $turkey3);
$farmer->addAnimal($farm, $horse1);
$farmer->addAnimal($farm, $horse2);
$farmer->addAnimal($birdfarm, $goose);

$farmer->rollCall($farm);
$farmer->rollCall($birdfarm);

