<?php

namespace Cat;

class HungryCat 
{
	public $name;
	public $color;
	public $favoriteFood;

	public function __construct($name, $color, $favoriteFood) 
	{
		$this->name = $name;
		$this->color = $color;
		$this->favoriteFood = $favoriteFood;
	}

	public function eat($food) 
	{
		if ($this->favoriteFood == $food) {
		    return "Голодный кот $this->name, особые приметы: цвет - $this->color, съел $food и замурчал 'мрррррр'";
		}
		return "Голодный кот $this->name, особые приметы: цвет - $this->color, съел $food";
	}

	public function getFavoriteFood() 
	{
		return $this->favoriteFood;
	}
}