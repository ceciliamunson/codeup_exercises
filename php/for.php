<?php

//prompt user for staring number
fwrite(STDOUT, "Enter starting number: ");
$starting_number = intval(fgets(STDIN));
//prompt user for ending number
fwrite(STDOUT, "Enter ending number: ");
$ending_number = intval(fgets(STDIN));

//display all nubers from starting to ending using for loop
for ($i = $starting_number; $i <= $ending_number; $i++) {
	echo "{$i}\n";
}








?>