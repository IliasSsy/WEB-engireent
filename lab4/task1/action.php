<?php

$year = (int)$_POST['year'];



if (($year < 0) || ($year > 30000)) {
    echo "Invalid input, year is out of range" . PHP_EOL;
} else {
    if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 == 0)) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}

