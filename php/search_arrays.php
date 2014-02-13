<?php

// Create a function that returns TRUE or FALSE if an array value is found.Search for Tina and Bob in $names. Make sure it works as expected.

$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function is_in_array($value, $array) {
	$result = array_search($value, $array);
	if ($result === FALSE) {
		return FALSE;
	}
	else {
		return TRUE;
	}
	
}

if (is_in_array('Tina', $names)){
	echo 'TRUE' . PHP_EOL;
} 
else {
	echo 'FALSE' . PHP_EOL;
}

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function compare_arrays($array1, $array2) {
	$numberInCommon = 0;

	//$index = 0;	 	
	//do {
		//$array2_name = $array2[$index];
		//$result = array_search($array2_name, $array2);
	foreach ($array1 as $array1_name) {
	//for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
	//echo "{$i}\n";
	//}		
			$result = array_search($array1_name, $array2);
			if (is_numeric($result)) {
				$numberInCommon ++;
			}
			//$index += 1;
		//} while ($index = (count($array2) - 1);
	}
	return $numberInCommon;	
}
echo compare_arrays($names, $compare);

?>