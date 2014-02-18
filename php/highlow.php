<?php
//define variable for # of guesses
$number_guesses = 0;
//generate random number that user needs to guess. 
//define random number range variables.
$min = $argv[1];
$max = $argv[2];
$random_number = mt_rand($min, $max);

	//check that user enters 2 values for $min and $max
	if ($argc == 3) {
		//check that user enters only numeric values
		if (is_numeric($min) == TRUE && is_numeric($max) == TRUE) {
			//game starts playing
			do {
				//prompts user to guess number
				fwrite(STDOUT, "Guess number between $min and $max: ");
				$user_number = fgets(STDIN);
				$number_guesses ++;
				//gives user hints
				if ($user_number < $random_number) {
					echo "Higher\n";
				} elseif ($user_number > $random_number) {
					echo "Lower\n";
				} else {
				    echo "Good guess. You won!\n";
					echo "Number of guesses: $number_guesses\n";
				}
			} while ($random_number != $user_number);
			exit(0);
		  //Prompts error if user doen't enter numeric values
		} else { 
			fwrite(STDERR, 'Please enter a numeric value'); }
	  //prompts error if user doessn't enter 2 values
	} else {fwrite(STDERR, 'Please enter only a minimum and a maximum number for the range'); }





?>

