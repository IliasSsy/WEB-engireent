<?php

$str = $_POST["note"];

$stack = [];
$top = -1;
$num = "";

for ($i = 0; $str[$i] != ""; $i++) {

    $digit = $str[$i];

    if ($digit >= '0' && $digit <= '9') {
        $num .= $digit;
    }

    else if ($digit == ' ') {

        if ($num != "") {
            $top++;
            $stack[$top] = (int)$num;
            $num = "";
        }
    }

    else if ($digit == '+' || $digit == '-' || $digit == '*') {

        $firstDigit = $stack[$top];
        $top--;

        $secondDigit = $stack[$top];
        $top--;

        if ($digit == '+') {
            $res = $secondDigit + $firstDigit;
        }
        else if ($digit == '-') {
            $res = $secondDigit - $firstDigit;
        }
        else {
            $res = $firstDigit * $secondDigit;
        }

        $top++;
        $stack[$top] = $res;
    }
}

echo $stack[$top];