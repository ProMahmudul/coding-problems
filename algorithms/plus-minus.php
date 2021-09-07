<?php
function plusMinus($arr)
{
    $l = count($arr);
    $p = $n = $z = 0;

    for ($i = 0; ($i < $l) && ($l <= 100); $i++) {
        if ($arr[$i] > 0) {
            $p++;
        } else if ($arr[$i] < 0) {
            $n++;
        } else {
            $z++;
        }
    }

    echo sprintf("%.6f\n%.6f\n%.6f", ($p / $l), ($n / $l), ($z / $l));

}

plusMinus(array(-4, 3, -9, 0, 4, 1));
