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


$obj = [];
$classes = ['ChiCKen', 'tiGer', 'CAT', 'Fish', 'dog', 'noName', 'EmptyClass', 'TurkeY', 'Obj', 'elEment'];

for ($i = 0; $i < count($classes); $i++) {
	$obj[$i] = new Creator();
	$obj[$i]->create($classes[$i]);
	echo '<br>';
}
