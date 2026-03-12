<?php

$str = $_POST["digit"];

$numbers = [
    0 => "Zero",
    1 => "One",
    2 => "Two",
    3 => "Three",
    4 => "Four",
    5 => "Five",
    6 => "Six",
    7 => "Seven",
    8 => "Eight",
    9 => "Nine",
];

if (isset($numbers[$str])) {
    echo "Number is " . $numbers[$str] . "\n";
} else {
    echo "It is not a number" . PHP_EOL;
}
