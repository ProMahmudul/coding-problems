<?php
function staircase($n)
{
//    for ($i = 0; ($i < $n) && ($n <= 100); $i++) {
//        for ($space = 0; $space < ($n - $i); $space++) {
//            echo " ";
//        }
//        for ($hash = 0; $hash < $i; $hash++ ){
//            echo "#";
//        }
//        echo PHP_EOL;
//    }

//    for ($i = 1; ($i <= $n) && ($n <= 100); $i++) {
//        echo str_repeat(" ", $n - $i) . str_repeat("#", $i) . "\n";
//    }

    foreach (range(1, $n) as $i) {
        echo str_repeat(" ", $n - $i) . str_repeat("#", $i) . "\n";
    }
}

staircase(6);
