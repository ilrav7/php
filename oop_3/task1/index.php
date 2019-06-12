<?php

class Box 
{
	public function putBall(Ball $ball)
	{
		echo 'В корзину добавлен мяч '. '<br>';
		$ball->addBall();
	}
}

class Ball
{
	public static $count = 0;

	public function addBall()
	{
		++self::$count;
	}
	
	public function getCount()
	{
		return self::$count;
	}
}

$box = [];
$box = new Box;

for ($i = 0; $i < rand(1, 20); $i++) {
	$ball = new Ball;
	$box->putBall($ball);
}

echo $ball->getCount();