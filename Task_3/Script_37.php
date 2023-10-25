<?php

$array = array("Dhaval","Keval","Jimit","Divyaraj");
echo "Array before push :"."<br>";
print_r($array);
echo "<br>"."Array before push :";

array_push($array,"Vivek","Yash");
echo "<br>";
print_r($array);


echo "<br>Array pop:";
echo "<br>";

array_pop($array);
print_r($array);



?>