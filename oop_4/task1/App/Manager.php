<?php

namespace App;

class Manager
{
	public function place($item) 
	{
		if ($item instanceof Papers) {
			echo "Положил " . substr(strrchr(get_class($item), "\\"), 1) . " на стол" . '<br>';
		} elseif ($item instanceof Instrument) {
			echo "Убрал " . substr(strrchr(get_class($item), "\\"), 1) . " внутрь стола" . '<br>';
		} elseif (is_object($item)) {
			echo 'Выкинул '. substr(strrchr(get_class($item), "\\"), 1) . ' в корзину' . '<br>';
		} else {
			echo 'Выкинул '. $item . ' в корзину' . '<br>';
		}
	}
}