<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($items) {

    $listItem = "";
    foreach ($items as $key => $item) {
            $newIndex = $key + 1; 
            $listItem .= "$newIndex" . " " . "TODO" . " " . "$item" . PHP_EOL;
    }
    return  $listItem;
    
}  
// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
    // Return filtered STDIN input
    $input = trim(fgets(STDIN));
    if ($upper) {
        $input = strtoupper($input);
    }
    return $input;
}

// The loop!
do {    
    echo list_items($items);
    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';
    $input = get_input(TRUE);
        // Ask for entry
    if ($input == 'N') {

        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
        
        // Remove which item?
    } 
    elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        $newIndex = $key - 1;
        unset($items[$newIndex]);
    }
    elseif ($input == 'S') {
        echo "For A-Z sorting enter A and for Z-A sorting enter Z: ";
        $input = get_input(TRUE);
        if ($input == 'A') {
            asort($items);
        }
        else {
            arsort($items);
        }
    }
}

// Exit when input is (Q)uit
while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>