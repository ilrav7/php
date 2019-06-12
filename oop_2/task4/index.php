<?php

class Forge 
{
	public function burn($object) 
	{
		$flame = $object->burn();
		echo $flame->render((string)$object). PHP_EOL;
	}
}

class BlueFlame 
{
	public function render($name)
	{
		return $name . ' горит синим пламенем';
	}
}

class RedFlame 
{
	public function render($name)
	{
		return $name . ' горит красным пламенем';
	}
}

class Smoke 
{
	public function render($name)
	{
		return $name . ' лишь задымился';
	}
}

// class BurnObject
// {
// 	public function burn() 
// 	{
// 		return new Smoke;
// 	}

// 	public function __toString() 
// 	{
// 		return get_class($this);
// 	}
// }

class Table 
{
	public function burn() 
	{
		return new RedFlame;
	}

	public function __toString() 
	{
		return get_class($this);
	}
}

class Book 
{
	public function burn() 
	{
		return new RedFlame;
	}

	public function __toString() 
	{
		return get_class($this);
	}
}

class Laptop 
{
	public function burn() 
	{
		return new BlueFlame;
	}

	public function __toString() 
	{
		return get_class($this);
	}
}

class Notebook 
{
	public function burn() 
	{
		return new Smoke;
	}

	public function __toString() 
	{
		return get_class($this);
	}
}

class Phone 
{
	public function burn() 
	{
		return new BlueFlame;
	}

	public function __toString() 
	{
		return get_class($this);
	}
}

$forge = new Forge;

$forge->burn(new Laptop);
$forge->burn(new Notebook);
$forge->burn(new Table);
$forge->burn(new Book);
$forge->burn(new Phone);
