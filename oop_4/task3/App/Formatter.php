<?php

namespace App;

interface Formatter
{
	public function format($string) : string;
}