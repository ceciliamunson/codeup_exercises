<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

//Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.
// array_pop($physicists_array);
// array_push($physicists_array, 'and Tony Stark');
// $famous_fake_physicists = implode(', ', $physicists_array);


//Turn your solution into a function named humanized_list(). You should be able to pass the 
//$physicists_array as the only argument, and your function will return the result.
//// Converts array into list n1, n2, ..., and n3
//Update your code to list the physicists by first name, in alphabetical order.
function humanized_list($string, $sort = FALSE) {
	
	$array = explode(', ', $string);
	if ($sort) {
		asort($array);
	}
  	$last_item = array_pop($array);
	array_push($array, "and $last_item");
	return implode(', ', $array); 
}

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, FALSE);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n"






?>