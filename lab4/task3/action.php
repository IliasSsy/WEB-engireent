<?php

$date = $_POST['date'];

$day = "";
$month = "";
$year = "";

$part = 0;


/* разбор строки */

for ($i = 0; $date[$i] != ""; $i++) {

    $ch = $date[$i];

    if ($ch == '.' || $ch == '/' || $ch == '-' || $ch == ' ') {
        $part++;
        continue;
    }

    if ($part == 0) {
        $day .= $ch;
    }
    else if ($part == 1) {
        $month .= $ch;
    }
    else {
        $year .= $ch;
    }
}

$valid = true;

for ($i = 0; $day[$i] != ""; $i++) {
    if ($day[$i] < '0' || $day[$i] > '9') {
        $valid = false;
    }
}

for ($i = 0; $month[$i] != ""; $i++) {
    if ($month[$i] < '0' || $month[$i] > '9') {
        $valid = false;
    }
}

for ($i = 0; $year[$i] != ""; $i++) {
    if ($year[$i] < '0' || $year[$i] > '9') {
        $valid = false;
    }
}

if (!$valid) {
    echo "Invalid date";
    exit;
}

$day = (int)$day;
$month = (int)$month;
$year = (int)$year;



if ($month < 1 || $month > 12) {
    echo "Invalid date";
    exit;
}

if ($day < 1 || $day > 31) {
    echo "Invalid date";
    exit;
}

if ($year < 1 || $year > 30000) {
    echo "Invalid date";
    exit;
}


/* знак зодиака */

if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18))
    echo "Водолей";

else if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20))
    echo "Рыбы";

else if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19))
    echo "Овен";

else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20))
    echo "Телец";

else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20))
    echo "Близнецы";

else if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22))
    echo "Рак";

else if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22))
    echo "Лев";

else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22))
    echo "Дева";

else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22))
    echo "Весы";

else if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21))
    echo "Скорпион";

else if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21))
    echo "Стрелец";

else
    echo "Козерог";