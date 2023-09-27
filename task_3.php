<?php

# shorts array
function shortDesc($grades)
{
    rsort($grades);
    return $grades;
}

$grades = [85, 92, 78, 88, 95];

# call shortDesc function
print_r(shortDesc($grades));
