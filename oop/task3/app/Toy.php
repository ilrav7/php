<?php

namespace App;

class Toy 
{
	public $name;
	public $price;

	public function __construct($name, $price) 
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName() 
	{
		return $this->name;
	}

	public function getPrice() 
	{
		return $this->price;
	}
}