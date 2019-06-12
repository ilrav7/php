<?php

namespace App\Bird;

class Bird 
{
	public function tryToFly() 
	{
		echo 'Вжих-вжих';
	}

	public function walk()
	{	
		$this->tryToFly;
		parent::walk();
	}

}