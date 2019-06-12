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

$manager = new Manager;

$manager->place(new Book);
$manager->place(new Notebook);
$manager->place(new Eraser);
$manager->place('unknow');
$manager->place(new Document);
$manager->place(new Pen);
$manager->place('noName');