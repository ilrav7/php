<?php

abstract class Animal 
{
	abstract public function move();
}

abstract class MammalsClass extends Animal //класс млекопитающие
{

}

class Fish extends Animal
{
	public function move()
	{
		echo "бульк";
	}
}

class Tiger extends MammalsClass
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Bear extends MammalsClass
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Moose extends MammalsClass
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Snake extends Animal
{
	public function move()
	{
		echo "ползает";
	}
}

class Chicken extends Animal
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Camel extends MammalsClass
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Elephant extends MammalsClass
{
	public function move()
	{
		echo "топ-топ";
	}
}

class Dolphin extends MammalsClass
{
	public function move()
	{
		echo "бульк";
	}
}

$d = new Dolphin;

$d->move();

