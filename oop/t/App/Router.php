<?php

namespace App;

class Router 
{
	public function dispatch($formatter) 
	{
		if (is_subclass_of($formatter, 'App\Renderable')) {
                echo $formatter->render($string);
	}
}