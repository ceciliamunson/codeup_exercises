<?php
		
// error function if arguments not numeric
function not_numeric($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";
		exit(0);
	}
	if (!is_numeric($b)) {
		echo "$b is not a numeric value\n";
		exit(0);
	}
	

}

//error function if divinding by zero
function not_div_by_zero($a, $b) {
	if ($b == 0) {
		echo "Dividing by zero is not a valid operation\n";
		exit(0);
	}
	
}

function add($a, $b) {
 		not_numeric($a, $b);
		echo ($a + $b) . "\n";
}

function subtract($a, $b) {
		not_numeric($a, $b);
		echo ($a - $b) . "\n";
}
	
function multiply($a, $b) {
		not_numeric($a, $b);
		echo ($a * $b) . "\n";
}

function divide($a, $b) {
		not_numeric($a, $b);
		not_div_by_zero($a, $b);
		echo ($a / $b) . "\n";
}

	//add function that finds the modulus of 2 numbers
function modulus($a, $b) {
		not_numeric($a, $b);
		echo ($a % $b) . "\n";
}

add(5, 4);
subtract(20, 5);
multiply(3, 2);
divide(20, 10);
modulus(10, 5);	
