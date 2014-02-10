<?php
//print numbers from 0 to 100
for ($number = 0; $number <= 100; $number ++)
//for multiples of 3 print Fizz instead of number
//for multiples of 5 print Buzz instead of number
//for numbers multiples of 3 and 5 print FizzBuzz
 if ($number % 3 == 0 && $number % 5 == 0) {
 	echo "FizzBuzz\n";
 } elseif ($number % 3 == 0) {
 	echo "Fizz\n";
 } elseif ($number % 5 == 0) {
 	echo "Buzz\n";
 } else {
 	echo "$number\n";
 }

 




?>