<?php

function factorial($number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}


$number = (int)$_POST['number'];

if (($number < 0) || ($number > 20)) {
    echo "Invalid data. Please, use numbers between 0 and 20.";
    exit;
}

echo factorial($number);