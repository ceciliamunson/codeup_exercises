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
//Create a function that reads the file, and adds each line to the current TODO list. 
//Loading data/todo_list.txt should properly load the list from above. Be sure to fclose() 
//the file when you are done reading it.
function add_to_list($filename) {
                $handle = fopen($filename, "r");
                $contents = fread($handle, filesize($filename));
                fclose($handle);    
                return  explode("\n", $contents);
}

// The loop!
do {    
    echo list_items($items);
    // Show the menu options
    //Allow a user to enter F at the main menu to remove the first item 
    //on the list. This feature will not be added to the menu, and will 
    //be a special feature that is only available to "power users". 
    //Also add a L option that grabs and removes the last item in the list.
    echo '(N)ew item, (R)emove item, (S)ort items, (F)ile menu, (Q)uit : ';
    $input = get_input(TRUE);
        // Ask for entry
    if ($input == 'N') {
        //ask the user if they want to add it to the beginning or end 
        //of the list. Default to end if no input is given.
        echo 'Add item to (B)eginning or (E)nd of the list? ';
        $input = get_input(TRUE);
        echo 'Enter item: ';
        if ($input == 'B') {
            array_unshift($items, get_input());
        }
        else {
            array_push($items, get_input());
        }       
        
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
    //add File menu
    

    elseif ($input == 'F') {
        echo '(O)pen file option ';
        $open = get_input(TRUE);
        if ($open == 'O') {
            echo 'Enter file name: ';
            $filename = get_input();
            $items = add_to_list($filename);
        }
        
    }
    //remove first item from list
    elseif ($input == 'M') {
        array_shift($items);
    }
    //remove last item from list
    elseif ($input == 'L') {
        array_pop($items);
    }
}

// Exit when input is (Q)uit
while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>