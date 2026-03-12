<?php

$firstNumber = $_POST["ticketFirst"];
$secondNumber = $_POST["ticketSecond"];


function len($number) {
    $counter = 0;

    for ($i = 0; $number[$i] != ""; $i++) {
        $counter++;
    }

    return $counter;
}

if ($firstNumber > $secondNumber) {
    $temp = $firstNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $temp;
}


for ($n = $firstNumber; $n <= $secondNumber; $n++) {

    $number = (string)$n;

    while (len($number) < 6) {
        $number = "0" . $number;
    }

    $sumLeft = 0;
    $sumRight = 0;

    for ($i = 0; $i < 6; $i++) {

        if ($i < 3) {
            $sumLeft += $number[$i];
        } else {
            $sumRight += $number[$i];
        }
    }

    if ($sumLeft == $sumRight) {
        echo "Lucky ticket: $number <br>";
    }
}