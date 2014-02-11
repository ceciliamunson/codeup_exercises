<?php
		
function add($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";	
	}
	elseif (!is_numeric($b)) {
		echo "$b is not a numeric value\n";	
	}
    else {
		echo ($a + $b) . "\n";
	}	
}
add(1, 4);

function subtract($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";	
	}
	elseif (!is_numeric($b)) {
		echo "$b is not a numeric value\n";	
	}
	else {
		echo ($a - $b) . "\n";
	}	
}
	subtract(20, 5);

function multiply($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";	
	}
	elseif (!is_numeric($b)) {
		echo "$b is not a numeric value\n";	
	}
	else {
		echo ($a * $b) . "\n";
	}	
}
	multiply(3, 2);

function divide($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";	
	}
	elseif (!is_numeric($b)) {
		echo "$b is not a numeric value\n";	
	}
	elseif ($b == 0) {
		echo "Dividing by zero is not a valid operation\n";
	}
	else {
		echo ($a / $b) . "\n";
	}	
}
	divide(20, 10);

	//add function that finds the modulus of 2 numbers
function modulus($a, $b) {
	if (!is_numeric($a)) {
		echo "$a is not a numeric value\n";
	}
	elseif (!is_numeric($b)) {
		echo "$b is not a numeric value\n";	
	}
	else {
		echo ($a % $b) . "\n";
	}	
}
	modulus(10, 5);
	




?>