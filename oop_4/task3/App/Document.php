<?php

namespace App;

class Document
{
	public function format($string) : string
	{
		return printf("[%'/40s]\n",  $string);
	}
}