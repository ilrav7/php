<?php

class Cat
{
	private $name;
	private $color;
	private $age;

	public function __construct($name, $color, $age) 
	{
		$this->name = $name;
		$this->color = $color;
		$this->age = $age;
	}
}

class CatFactory
{
	public static function createBlack8YearsOldCat($name)
	{
		return new Cat($name, 'black', 8);
	}

	public static function createBlackCat($name, $age)
	{
		return new Cat($name, 'black', $age);
	}

	public static function createOrangeNameVasiliyCat($age)
	{
		return new Cat('Василий', 'orange', $age);
	}

	public static function createCat($name, $color, $age)
	{
		return new Cat($name, $color, $age);
	}

	public static function create8YearsOldCat($name, $color)
	{
		return new Cat($name, $color, 8);
	}

	public static function createNameKuzy8YearsOldCat($color)
	{
		return new Cat("Кузя", $color, 8);
	}
}

$cats[0] = CatFactory::createBlack8YearsOldCat("Василий");
$cats[1] = CatFactory::createBlackCat("Василий", 6);
$cats[2] = CatFactory::createOrangeNameVasiliyCat(8);
$cats[3] = CatFactory::createCat("Василий", "рыжий", 8);
$cats[4] = CatFactory::create8YearsOldCat("Василий", "рыжий");
$cats[5] = CatFactory::createNameKuzy8YearsOldCat("рыжий");

foreach ($cats as $cat) {
	echo var_dump($cat) . '<br>';
}


