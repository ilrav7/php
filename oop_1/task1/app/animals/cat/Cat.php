<?php

namespace App\Animals\Cat;

class Cat 
{
	public $name;

	public function __construct($name) 
	{
		$this->name = $name;
	}

	public function getName() 
	{
		return $this->name;
	}
}

