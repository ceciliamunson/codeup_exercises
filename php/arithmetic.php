<?php
		
function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a + $b) . "\n";
    }
    else {
		echo "Please enter only numeric values\n";
	}	
}
add(1, 4);

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a - $b) . "\n";
	}
	else {
		echo "Please enter only numeric values\n";
	}	
}
	subtract(20, 5);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a * $b) . "\n";
	}
	else {
		echo "Please enter only numeric values\n";
	}	
}
	multiply(3, 2);

function divide($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "Please enter only numeric values\n";	
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
	if (is_numeric($a) && is_numeric($b)) {
		echo ($a % $b) . "\n";
	}
	else {
		echo "Please enter only numeric values\n";
	}	
}
	modulus(a, 5);
	




?>