<?php

namespace App;

class Display
{
	public static function show($formatter, $string) 
	{
			if ($formatter instanceof Renderable) {
                echo $formatter->render($string);
            } elseif ($formatter instanceof Formatter) { 
			    $formatter->format($string);
            } elseif (method_exists($formatter,'format')) {
                $formatter->format($string);
            } else {
                echo $string;
            }
	}
}