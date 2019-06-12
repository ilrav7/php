<?php

namespace App;

class Farmer 
{
	function addAnimal(Farm $farm, Pet $animal)
	{
		$farm->addAnimal($animal);
	}

	function rollCall(Farm $farm)
	{
		$farm->rollCall();
	}
}