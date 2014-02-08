<?php

//prompt user for staring number
fwrite(STDOUT, "Enter starting number: ");
$starting_number = intval(fgets(STDIN));
//prompt user for ending number
fwrite(STDOUT, "Enter ending number: ");
$ending_number = intval(fgets(STDIN));
//promt user to enter increment
fwrite(STDOUT, "Enter increment: ");
$increment = trim(fgets(STDIN));
//default increment to 1 if no input
if (!is_numeric($increment)) {
	$increment = 1;
}

//display numbers from starting to ending with user-specified increment 
for ($i = $starting_number; $i <= $ending_number; $i += $increment) {
	echo "{$i}\n";
}









?>