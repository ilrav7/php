<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/oop/task4/app/User.php");
use App\User;

$user1 = new User('Иванов И.И','ivan@gg.ru', 'мужской', '17', '+7(999)123-45-01');
$user1->notify('сообщение');

echo '<br>';

$user1 = new User('Петрова И.И','petrova@gg.ru', 'женский', '19');
$user1->notify('сообщение');

echo '<br>';

$user1 = new User('Сидоров И.И','petrova@gg.ru', 'мужской', '19', '+7(999)123-45-02');
$user1->notify('сообщение');
