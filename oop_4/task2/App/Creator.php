<?php

namespace App;

class Creator 
{
	public static function create($name) 
	{	
		$name = 'App\\' . ucfirst(strtolower($name));

        if (class_exists($name) !== false) {
            if (get_parent_class($name) == 'App\\Item') {
                $obj = new $name($name); 
                $obj->show();
            } else { 
			    $obj = new $name($name); 
                echo "Класс $name не наследуется от класса Item";
            }
            return;
        }
         
        $obj = new EmptyItem($name);
        $obj->show();
	}
}
