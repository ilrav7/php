<?php

namespace App;

spl_autoload_register(function ($class) {
	$prefix = 'App\\';
	$base_dir = __DIR__ . '/App/';
	$len = strlen($prefix);

	if (strncmp($prefix, $class, $len) !== 0) {
		return;
	}

	$relative_class = substr($class, $len);
	$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
	
	if (file_exists($file)) {
		require $file;
	}
});

$display = [];
$obj = [new Text, new Document, new OtherDoc, new OtherText, new OtherDoc, new OtherText, new Text];
$string = ['Строка1', 'Строка2', 'Строка3', 'Строка4', 'Строка5', 'Строка6', 'Строка7', 'Строка8', 'Строка9'];

for ($i = 0; $i < count($obj); $i++) {
	$display[$i] = new Display;
	$display[$i]->show($obj[$i], $string[$i]);
	echo '<br>';
}

