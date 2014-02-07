<?php
$number_guesses = 0;
$random_number = mt_rand(1, 100);
do {
	fwrite(STDOUT, 'Guess number between 1 and 100 ');
	$user_number = fgets(STDIN);
	$number_guesses ++;
	if ($user_number < $random_number) {
		echo "Higher\n";
	}
	elseif ($user_number > $random_number) {
		echo "Lower\n";
	}
	else {
		echo "Good guess. You won!\n";
		echo "Number of guesses: $number_guesses\n";
	}
}
while ($random_number != $user_number);
exit(0);

?>

