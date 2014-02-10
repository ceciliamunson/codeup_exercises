<?php

$things =  array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//Construct a loop that iterates through each value and outputs only values that are scalar.

foreach ($things as $thing) {

	//checks if it's scalar and output only scalar values
	if (is_scalar($thing)) {
		echo "$thing\n"; }

		//check if it's an integer
		//if (is_int($thing)) {
			//echo "$thing is an integer\n";
		//}
		//check if it's a float
		//elseif (is_float($thing)) {
			//echo "$thing is a float\n";
		//}
		//check if it's a boolean
		//elseif (is_bool($thing)) {
			//echo "$thing is a boolean\n";
		//}
		//check if it's an array
		//elseif (is_array($thing)) {
			//echo "$thing is an array\n";
		//}
		//check if it's null
		//elseif (is_null($thing)) {
			//echo "$thing is null\n";
		//}
		//check if it's a string
		//elseif (is_string($thing)) {
			//echo "$thing is a string\n";
		//}
	
}

?>