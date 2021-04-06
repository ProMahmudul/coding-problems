<?php
/**
 * Difference function
 *
 * @param array $arr
 * @return integer
 */
function difference($arr): int
{
    // Initialize sums of diagonals
    $d1 = 0;
    $d2 = 0;

    //Length of array
    $arrayLength = count($arr);

    for ($i = 0; $i < $arrayLength; $i++) {
        //finding sum of primary diagonal
        $d1 += $arr[$i][$i];

        //finding sum of secondary diagonal
        $d2 += $arr[$i][$arrayLength - $i - 1];
    }

    //Absolute difference of the sums
    return abs($d1 - $d2);
}

// Driver Code
$arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

echo difference($arr);
