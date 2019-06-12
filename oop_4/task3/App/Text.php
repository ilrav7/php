<?php

namespace App;

class Text implements Renderable 
{
	public function render($string)
	{
		return 'Render ' . $string;
	}
}