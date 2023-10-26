<!-- Create two arrays, one with fruits and another with vegetables. Merge them into a single array. -->

<?php

    $fruits = array("apple", "banana", "cherry", "orange");
    
    
    $vegetables = array("potato", "onion", "garlic", "tomato");
    
    // Merge the two arrays into a single array
    
    $merge = array_merge($fruits, $vegetables);
    
    // Display the merged array
    echo "Merge them into a single array : <br> " ;
    print_r($merge);
?>