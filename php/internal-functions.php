<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function set_or_empty($var) {
	if (isset($var)) {
		return TRUE; 
	}
	elseif (empty($var)) {
		return FALSE;
	}
		
}
// TEST: If var $nothing is set, display '$nothing is SET'
if (set_or_empty($nothing)) {
	echo "\$nothing is SET\n";
}
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
if (set_or_empty($nothing) == FALSE) {
	echo "\$nothing is EMPTY\n";
}
// TEST: If var $something is set, display '$something is SET'
if (set_or_empty($something)) {
	echo "\$something is SET\n";
}
//Update the 'is set' check on $something to see if it is 'empty'
if (set_or_empty($something)) {
	echo "\$something is EMPTY\n";
}

// Serialize the array $array, and output the results

$serial = serialize($array);
echo $serial . PHP_EOL;
// Unserialize the array $array, and output the results
$unserial = unserialize($serial);
var_dump($unserial);


?>