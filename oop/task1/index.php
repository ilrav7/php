<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task1/app/animals/cat/Cat.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task1/app/animals/dog/Dog.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task1/app/animals/fish/Fish.php');

use App\Animals\Cat\Cat;
use App\Animals\Dog\Dog;
use App\Animals\Fish\Fish;


$cats = [];

$cats[0] = new Cat("Снежок");
$cats[1] = new Cat("Рыжик");
$cats[2] = new Cat("Кузя");

foreach ($cats as $cat) {
    echo $cat->getName().'<br>';
}

echo '<br>';

$dogs = [];
$dogs[0] = new Dog("Бим");
$dogs[1] = new Dog("Черныш");
$dogs[2] = new Dog("Рекс");
$dogs[3] = new Dog("Малыш");
$dogs[4] = new Dog("Альф");

foreach ($dogs as $dog) {
    echo $dog->getName().'<br>';
}

echo '<br>';

$fish1 = new Fish("Рыбка");
echo $fish1->getName();
