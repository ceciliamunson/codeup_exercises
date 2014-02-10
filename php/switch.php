<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)

$day_of_week = date(rand(1,7));

switch($day_of_week) {
    case 1:
        // Output Monday
    	echo "Today is Monday\n";
    	break;
    case 2: 
        // Output Tuesday
    	echo "Today is Tuesday\n";
    	break;
    case 3: 
        // Output Wednesday
    	echo "Today is Wednesday\n";
    	break;
    case 4: 
        // Output Thursday
    	echo "Today is Thursday\n";
    	break;
    case 5: 
        // Output Friday
    	echo "Today is Friday\n";
    	break;
    case 6: 
        // Output Saturday
    	echo "Today is Saturday\n";
    	break;
    case 7: 
        // Output Sunday
    	echo "Today is Sunday\n";
    	break;
  
}


?>