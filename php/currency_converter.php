<?php


$dollar_to_euro = 0.73; 
$dollar_to_lbs = 0.60;
$dollar_to_pesos = 13;

function get_input($upper = FALSE) {
    
    $input = trim(fgets(STDIN));
    if ($upper) {
        $input = strtoupper($input);
    }
    return $input;
}

function convert_currency($dollar, $rate) {
	$amount = $dollar * $rate;
	return $amount;
}

echo "Enter the amount that you want want to convert: $";
$dollar = get_input();
if (is_numeric($dollar)) {
	echo "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds: ";
	$currency = get_input(TRUE);

	if ($currency == 'E') {
		$amount = convert_currency($dollar, $dollar_to_euro);
		echo "\${$dollar} is equivalent to $amount euros\n";
	}
	elseif ($currency == 'P') {
		$amount = convert_currency($dollar, $dollar_to_pesos);
		echo "\${$dollar} is equivalent to $amount pesos\n";
	}
	elseif ($currency == 'B') {
		$amount = convert_currency($dollar, $dollar_to_lbs);
		echo "\${$dollar} is equivalent to $amount British pounds\n";
	}
}

?>