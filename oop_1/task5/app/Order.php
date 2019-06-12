<?php

namespace App;

use App\Basket;

class Order 
{

	public $basket;

	public function __construct(Basket $basket) 
	{
		$this->basket = $basket;
	}

	public function getBasket() 
	{
		return $this->basket;
	}

	public function getPrice() 
	{
		return $this->getBasket()->getPrice(); 
	}
	
}

