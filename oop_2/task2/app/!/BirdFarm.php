<?php

namespace App;

class BirdFarm extends Farm 
{
	$birds = [];

	public function showAnimalCount() 
	{
		echo "Птиц на ферме " . count($this->birds);
	}

	public function addAnimal($bird) 
	{	
		$this->showAnimalCount();
		parent::addAnimal();
	}
}