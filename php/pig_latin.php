<?php

// English is translated to Pig Latin by taking the first letter of every word, 
// moving it to the end of the word and adding ‘ay’. “The quick brown fox” becomes 
// “Hetay uickqay rownbay oxfay”.
$array = array();
echo "Enter text to be converted to Pig Latin: ";
$text = trim(fgets(STDIN));

function pig_latin($text) {

	$array = explode(' ', $text);
	
	foreach ($array as $word) {

		$first_char = substr($word, 0, 1);
		$remaining_word = substr($word, 1);
		array_shift($array);
		if (ctype_upper($first_char)) {
			$first_char = strtolower($first_char); 
			$remaining_word = ucwords($remaining_word);	
		}
		$word = "$remaining_word" . "$first_char" . 'ay';
		array_push($array, $word);
		
	}
	return implode(' ', $array);
	
}
echo pig_latin($text) . PHP_EOL;


?>