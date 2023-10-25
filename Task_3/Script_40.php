<?php

$array = array("Dhaval","Keval","Jimit","Divyaraj");
$array2 = array("Yash","Vivek");

array_splice($array,2,3,$array2);
print_r($array);

?>