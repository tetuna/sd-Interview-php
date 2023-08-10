<?php
function arithmeticProgressionCheck($array = [1, 2, 3])
{
    $array_length = count($array);
    if ($array_length <= 2)
        return "error";
    $interval = $array[1] - $array[0];
    $i = 1;
    while ($array_length > $i) {
        if ($array[$i + 1] - $array[$i] == $interval) {
            ++$i;
        } else {
            return "NO";
        }
        return "Yes";
    }
}

function fibonacci($start = 0, $end = 144)
{
    /*-------all version works fine-------all version works fine-------all version works fine--------*/

    //$fibonacci = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, ...];

    if ($start >= $end || $start < 0) {
        return ['error'];
    }

    $fibonacci_array = [0, 1];
    $output_array = [];

    /*V1 Start()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv*/
    /*

    $i = 2;
    while ($fibonacci_array[$i - 1] + $fibonacci_array[$i - 2] <= $end) {
        $fibonacci_array[$i] = $fibonacci_array[$i - 1] + $fibonacci_array[$i - 2];
        if ($fibonacci_array[$i - 2] >= $start && $fibonacci_array[$i - 2] <= $end) {
            array_push($output_array, $fibonacci_array[$i - 2]);
        }
        ++$i;
    }

    if ($fibonacci_array[$i - 2] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 2]);
    }
    if ($fibonacci_array[$i - 1] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 1]);
    }
    return $output_array;

    */
    /*V1 End()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

    //$fibonacci = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, ...];

    /*V2 Start()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv*/
    /*

    $i = 2;
    do {
        $fibonacci_array[$i] = $fibonacci_array[$i - 1] + $fibonacci_array[$i - 2];
        if ($fibonacci_array[$i - 2] >= $start && $fibonacci_array[$i - 2] <= $end) {
            array_push($output_array, $fibonacci_array[$i - 2]);
        }
        ++$i;
    } while ($fibonacci_array[$i - 1] + $fibonacci_array[$i - 2] <= $end);

    if ($fibonacci_array[$i - 2] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 2]);
    }
    if ($fibonacci_array[$i - 1] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 1]);
    }
    return $output_array;

    */
    /*V2 End()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

    //$fibonacci = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, ...];

    /*V3 Start()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv*/
    /*

    for ($i = 2; $fibonacci_array[$i - 1] + $fibonacci_array[$i - 2] <= $end; $i++) {
        $fibonacci_array[$i] = $fibonacci_array[$i - 1] + $fibonacci_array[$i - 2];
        if ($fibonacci_array[$i - 2] >= $start && $fibonacci_array[$i - 2] <= $end) {
            array_push($output_array, $fibonacci_array[$i - 2]);
        }
    }

    if ($fibonacci_array[$i - 2] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 2]);
    }
    if ($fibonacci_array[$i - 1] >= $start) {
        array_push($output_array, $fibonacci_array[$i - 1]);
    }
    return $output_array;

    */
    /*V3 End()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
}

$array = fibonacci(0, 100);
print("<pre>" . print_r($array, true) . "</pre>");


$valval = arithmeticProgressionCheck([1, 2, 3]);
echo $valval;
