<?php

# print the average grade for each student
function Results($studentGrades)
{
    foreach ($studentGrades as $itemKey => $item)
    {
        $points = 0;
        $totalItem = count($item);
        foreach ($item as $valueKey => $value)
        {
            $points = $points + $value;
        }

        $avg = round($points / $totalItem, 2);

        if ($avg == 5)
        {
            echo $itemKey . " result is: A+ <br/>";
        }
        elseif ($avg >= 4 && $avg < 5)
        {
            echo $itemKey . " result is: A <br/>";
        }
        elseif ($avg >= 3.5 && $avg < 4)
        {
            echo $itemKey . " result is: A- <br/>";
        }
        elseif ($avg >= 3 && $avg < 3.5)
        {
            echo $itemKey . " result is: B <br/>";
        }
        elseif ($avg >= 2 && $avg < 3)
        {
            echo $itemKey . " result is: C <br/>";
        }
        elseif ($avg >= 1 && $avg < 2)
        {
            echo $itemKey . " result is: D <br/>";
        }
        elseif ($avg < 1 && $avg >= 0)
        {
            echo $itemKey . " result is: F <br/>";
        }
        else
        {
            echo "Unknown result";
        }
    }
}

$studentGrades = [
    'student_1' => ['math' => 4, 'english' => 5, 'science' => 5],
    'student_2' => ['math' => 3, 'english' => 3, 'science' => 4],
    'student_3' => ['math' => 1, 'english' => 2, 'science' => 4]
];

# call Results function
Results($studentGrades);
