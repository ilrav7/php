<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/oop/task3/app/Toy.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/oop/task3/app/ToyFactory.php");

use App\Toy;
use App\ToyFactory;

$toys = new ToyFactory;
$sum = 0;
$nameToys = ['Робот', 'Машинка', 'Кукла', 'Пистолет', 'Конструктор', 'Автомат', 'Медведь', 'Самолёт', 'Телефон'];
$randCount = rand(5, 20);

for ($i = 1; $i <= $randCount; $i++) { 
	$toy = $toys->createToy($nameToys[$i] ?? "Игрушка ".$i);
    echo $toy->getName().' - '.$toy->getPrice().'<br>';
    $sum += $toy->getPrice();
}
echo "Сумма стоимости всех игрушек = $sum";
