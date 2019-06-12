<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task2/cat/HungryCat.php');

use Cat\HungryCat;

$cat1 = new HungryCat("Василий", "Белый", "колбаса");
$cat2 = new HungryCat("Рыжик", "Рыжий", "kitekat");

echo $cat1->eat("хлеб").'<br>';
echo $cat1->eat("колбаса").'<br>';
echo $cat1->eat("whiskas").'<br>';
echo $cat1->eat("kitekat").'<br>';
echo $cat1->eat("суп").'<br>';

echo "<br>";

echo $cat2->eat("хлеб").'<br>';
echo $cat2->eat("колбаса").'<br>';
echo $cat2->eat("whiskas").'<br>';
echo $cat2->eat("kitekat").'<br>';
echo $cat2->eat("суп").'<br>';

