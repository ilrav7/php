<?php

namespace App;
use App\Toy;

class ToyFactory 
{
	public function createToy($name) 
	{
	    return new Toy($name, rand(10, 200));
	}
}