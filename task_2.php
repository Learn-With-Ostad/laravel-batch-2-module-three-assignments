<?php

# remove the even numbers
$num = 0;
function removeEven($numbers)
{
    $arrayCount = count($numbers);
    $a = 0;

    while ($a < $arrayCount)
    {

        if ($numbers[$a] % 2 == 0)
        {
            unset($numbers[$a]);
        }
        $a++;
    }

    return $numbers;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


# call removeEven function
print_r(removeEven($numbers));
