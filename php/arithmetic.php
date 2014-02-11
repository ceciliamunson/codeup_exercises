<?php

function add($a, $b) {
	
    echo (5 + 4);
}
echo add(5, 4) . "\n";

function subtract($a, $b) {
	
    echo $a - $b;
}
echo subtract(20, 5) . "\n";

function multiply($a, $b) {
	
    echo $a * $b;
}
echo multiply(3, 2) . "\n";

function divide($a, $b) {

    echo $a / $b;
}
echo divide(20, 10) . "\n";

//add function that finds the modulus of 2 numbers
function modulus($a, $b) {

	echo $a % $b;
}
echo modulus(15, 5) . "\n";

?>