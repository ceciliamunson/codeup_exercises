<?php
		
// error function if arguments not numeric
function not_numeric($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return TRUE;
	}
	else {
		echo "Both values must be numeric\n";	
		return FALSE;
	}
}

//error function if divinding by zero
function not_div_by_zero($a, $b) {
	if ($b == 0) {
		echo "FALSE";
		return FALSE;
	}
	else return TRUE;
	
}

function add($a, $b) {
	if  (not_numeric($a, $b) == TRUE) {
		return ($a + $b);
	}

}

function subtract($a, $b) {
	if  (not_numeric($a, $b) == TRUE) {
		return ($a - $b);
	}
}
	
function multiply($a, $b) {
	if  (not_numeric($a, $b) == TRUE) {
		return ($a * $b);
	}
}

function divide($a, $b) {
	if  (not_numeric($a, $b) == TRUE && not_div_by_zero($a, $b) == TRUE) {
		return ($a / $b);
	}
}

	//add function that finds the modulus of 2 numbers
function modulus($a, $b) {
	if  (not_numeric($a, $b) == TRUE) {
		return ($a % $b);
	}
}

echo add(1, 4) . PHP_EOL;
echo subtract(20, 5) . PHP_EOL;
echo multiply(3, 2) . PHP_EOL;
echo divide(20, 0) . PHP_EOL;
echo modulus(10, 5) . PHP_EOL;	
