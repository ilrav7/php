<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task5/app/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task5/app/Order.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/oop/task5/app/Basket.php');
require_once($_SERVER['DOCUMENT_ROOT'] . "/oop/task4/app/User.php");

use App\Product;
use App\Order;
use App\Basket;
use App\User;

$user1 = new User('Николай Николаич','nokolaych@gg.ru', 'мужской', '44', '+7(999)123-45-02');
$basket = new Basket;
$product1 = new Product('Продукт 1', '200');
$product2 = new Product('Продукт 2', '300');
$product3 = new Product('Продукт 3', '100');

$basket->addProduct($product2, 2);
$basket->addProduct($product3, 1);
$basket->addProduct($product1, 4);

?>
<p> Описание корзины </p>

<?php

$basket->describe();
$order = new Order($basket);

$str = $order->getBasket()->getName();

echo '<br>';
$user1->notify("Для вас создан заказ на сумму ".$order->getPrice()." состав заказа: $str");

