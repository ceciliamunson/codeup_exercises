<?php
$array = array();

function alphabet_soup($str) {
	
	$array = explode(" ", $str);
	foreach ($array as $words) {		
		
		$new_word = '';
		for ($i = 0; $i < strlen($words); $i++) {
			$char = substr($words, $i, 1);
			$new_word .= $char . " ";	
				
		}
		$nested_array = explode(" ", $new_word);
		if (asort($nested_array)) {

			$new_string = implode("", $nested_array);
			array_shift($array);
			array_push($array, $new_string);

		}
	}
	$new_string = implode(" ", $array);
	return $new_string;
	
}

echo alphabet_soup('cecilia') . PHP_EOL;

?>