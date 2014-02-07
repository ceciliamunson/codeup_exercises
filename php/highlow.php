<?php

$random_number = rand(1, 100);
do {
	fwrite(STDOUT, 'Guess number between 1 and 100 ');
	$user_number = fgets(STDIN);
	if ($user_number < $random_number) {
		echo "Higher\n";
	}
	elseif ($user_number > $random_number) {
		echo "Lower\n";
	}
	else {
		echo "Good guess. You won!\n";
	}
}
while ($random_number != $user_number);
exit(0);

?>

