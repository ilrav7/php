<?php

namespace App;

abstract class Item
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function show()
	{
		echo 'Я ' . $this->name;
	}
}