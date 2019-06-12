<?php

namespace App;

class Farm 
{
	public $animals = [];

	public function addAnimal($animal) 
	{
		$animal->walk();
		$this->animals[] = $animal;
	}

	public function showAnimalCount() 
	{
		return count($this->animals);
	}

	public function rollCall() 
	{
		shuffle($this->animals);
		foreach ($this->animals as $animal) {
			echo $animal->say() . PHP_EOL;
		}
	}
}

class BirdFarm extends Farm 
{
	public function addAnimal($animal) 
	{	
		parent::showAnimalCount();
		parent::addAnimal($animal);
	}
}