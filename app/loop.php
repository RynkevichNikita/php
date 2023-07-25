<?php

function arrayCalc($values) {
    $sum = 0;
    foreach ($values as $value) {
        if (is_int($value)) {
            $sum += $value;
        } else {
            continue;
        }
    }
    echo $sum;
}



$array = [5, 6, 2, "5", "калькулятор", 8, "helicopter"];
arrayCalc($array);

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function arrayValueFinder($values, $string) {
    $regString = "/$string/";
    foreach ($values as $value) {
        if (preg_match($regString, $value)) {
            echo "This is probably what you are looking for: $value";
            break;
        }
    }
}

arrayValueFinder($array, "li");

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function arraySortUp($values) {
    array_multisort($values);
    foreach ($values as $value) {
        echo " $value";
    }
}

arraySortUp($array);