<?php

namespace App;

class Bird extends Pet
{
	public function tryToFly() 
	{
		echo 'Вжих-вжих';
	}

	public function walk()
	{	
		$this->tryToFly();
		parent::walk();
	}
}

class Chicken extends Bird
{
	public function say() 
	{
		echo "ку-ка-ре-ку";
	}
}

class Goose extends Bird
{
	public function say() 
	{
		echo "га-га-га";
	}
}

class Turkey extends Bird
{
	public function say() 
	{
		echo "кулдык";
	}
}

