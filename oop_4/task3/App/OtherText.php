<?php

namespace App;

class OtherText implements Formatter
{
	public function format($string) : string
	{
		return printf("[%'#40s]\n",  $string);
	}
}