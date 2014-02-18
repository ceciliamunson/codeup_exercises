<?php



function ask_how_many_slices($number_of_slices) {
	
	echo "How many guests eat only $number_of_slices slice(s) of pizza: ";
	$number_of_guests = trim(fgets(STDIN));
	return $number_of_guests;
}

function calculate_pizzas() {
	$large = 8;
	$medium = 6;
	$small = 4;
	$total_slices = 0;
	$small_pizza = 0;
	$medium_pizza = 0;
	$large_pizza = 0;
	for ($number_of_slices = 1; $number_of_slices <= 4; $number_of_slices++) {
	
		$total_slices += ask_how_many_slices($number_of_slices) * $number_of_slices;
	}
	if ($total_slices <= $small) {
		$small_pizza = 1;
	}
	elseif ($total_slices <= $medium && $total_slices > $small) {
		$medium_pizza = 1;
	}
	elseif ($total_slices <= $large && $total_slices > $medium) {
		$large_pizza = 1;
	}
	elseif (($total_slices % $large) == 0) {
		$large_pizza = floor($total_slices / $large);
	}
	elseif (($total_slices % $large) <= $small) {
		$large_pizza = floor($total_slices / $large);
		$small_pizza = 1;
	}	
	else {
		$large_pizza = floor($total_slices / $large);
		$medium_pizza = 1;
	}
	

	echo "Large Pizzas: $large_pizza" . PHP_EOL;
	echo "Medium Pizzas: $medium_pizza" . PHP_EOL;
	echo "Small Pizzas: $small_pizza" . PHP_EOL;
}

calculate_pizzas();










?>