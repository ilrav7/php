<?php

namespace App;

class Pet
{
	public function say()
	{
	}

	public function walk()
	{
		echo "топ-топ" . '<br>';
	}
}

class Cow extends Pet
{
	public function say() 
	{
		echo "му-ууу";
	}
}

class Horse extends Pet
{
	public function say() 
	{
		echo "ии-го-го";
	}
}

class Pig extends Pet
{
	public function say() 
	{
		echo "хрю-хрю";
	}
}