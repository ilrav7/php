<?php

namespace App;

use App\Product;

class Basket 
{
	public $products = [];

	public function addProduct(Product $product, $quantity) 
	{
		$this->products[] =array('prod'=> $product, 'kol' => $quantity);
	}

	public function getPrice() 
	{
		$price = 0;
		
	    foreach ($this->products as $product) {
	    	$price += $product['prod']->getPrice() * $product['kol'];
	    }

	    return $price;
	}

	public function describe() 
	{	
		
	    foreach ($this->products as $product) {
	        echo $product['prod']->getName().' - '.$product['prod']->getPrice().' - '.$product['kol'].'<br>';
	    } 
	}

	public function getName() 
	{
		 $str = '';
		 foreach ($this->products as $product) {
		 	$str .= $product["prod"]->getName() . PHP_EOL;
		}
	     return $str;
	}
}