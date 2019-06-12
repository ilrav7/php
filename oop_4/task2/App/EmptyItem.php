<?php

namespace App;

class EmptyItem extends Item
{	
	public function show()
	{	
		echo 'Класс '. $this->name . ' не найден';
	}
}