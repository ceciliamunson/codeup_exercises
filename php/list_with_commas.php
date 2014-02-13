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
function humanized_list($string) {
	$array = explode(', ', $string);
  	$last_item = array_pop($array);
	array_push($array, "and $last_item");
	$new_string = implode(', ', $array);
	return $new_string;
}
$famous_fake_physicists = $new_string;
// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n"




?>