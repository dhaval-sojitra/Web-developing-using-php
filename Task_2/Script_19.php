<?php

    $num = 5;

    for($i=2;$i<$num;$i++)
    {
        if($num % $i == 0)
            {echo "$num is not a prime number.";
            break;}
        else
            { echo "$num is prime number.";
             break;}

    }

?>