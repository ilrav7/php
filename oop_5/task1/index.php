<pre>
<?php

class Calculator
{
	public static function calculate($number1, $number2, callable $callback)
	{
		return $callback($number1, $number2);
	}
}

function sum($number1 = 1, $number2 = 1) {
	return $number1 + $number2;
}

class Op
{
	public static function division($number1 = 1, $number2 = 1)
	{
		if ($number2 == 0) {
            echo "делить на ноль нельзя";
 	        return;
 	    }
 	    return $number1 / $number2; 
	}

	public function multiplication($number1, $number2)
	{
		return $number1 * $number2;
	}
}

$callbacks = [ 
	'sum',
    function($number1, $number2) {
    	return $number1 - $number2;
    },
    [new Op, 'multiplication'],
    [Op::class, 'division']
];

$number1 = 5;
$number2 = 10;

foreach($callbacks as $callback) {
	echo Calculator::calculate($number1, $number2, $callback);
	echo '<br>';
}

?>
</pre>