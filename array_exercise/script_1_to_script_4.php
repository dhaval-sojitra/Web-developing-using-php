<!-- 1. Create an indexed array containing your favourite colors. 
2. Add a new color to the array from question 1. 
3. Display the color at index 2 of the array from question 1. 
4. Check if the color "Green" exists in the array from question 1.  -->

<?php

echo "1. Create an indexed array containing your favourite colors.<br><br>";

$colors = array("White","Black","Green");
print_r($colors);

echo "<br><br>2. Add a new color to the array from question 1.<br><br>";

array_push($colors,"Red","Pink");
print_r($colors);

echo "<br><br>3. Display the color at index 2 of the array from question 1. <br><br>";

echo $colors[2];

echo "<br><br>4. Check if the color Green exists in the array from question 1.<br><br>";

if(in_array("Green",$colors))
    echo "Green color is exist in array";
else
    echo "Green color is not exits in array";

?>