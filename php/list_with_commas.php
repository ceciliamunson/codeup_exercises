<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);
//Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.
array_pop($physicists_array);
array_push($physicists_array, 'and Tony Stark');
$famous_fake_physicists = implode(', ', $physicists_array);
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";







?>