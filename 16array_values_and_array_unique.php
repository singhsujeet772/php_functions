<?php
//The array_values() function returns an array containing all the values of an array.

    $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");

    print_r(array_values($a));
    echo "<br>";

// The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

// Note: The returned array will keep the first array item's key type.

    $a=array("a"=>"red","b"=>"green","c"=>"red");

    print_r(array_unique($a));
?>