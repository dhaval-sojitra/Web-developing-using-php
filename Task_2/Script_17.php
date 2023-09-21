<?php

    $year = 2019;

    if($year % 400 == 00 )
        echo "$year is leap year.";
    elseif($year % 100 == 0)
        echo "$year is not leap year.";
    elseif($year % 4 == 0)
        echo "$year is leap year.";
    else
        echo "$year is not leap year.";

?>