<?php

$array = array("Dhaval","Keval","Jimit","Divyaraj");
echo "Array before shift : <br>";
print_r($array)."<br>";
echo array_shift($array)."<br>";
echo "Array after shift : <br>";
print_r($array);
echo "<br>Array after unshift : <br>";
array_unshift($array,"Dhaval");
print_r($array);

?>