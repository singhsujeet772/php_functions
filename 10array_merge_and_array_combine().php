<?php
    $a1=array("red","green");
    $a2=array("blue","yellow");
    $c=array_merge($a1,$a2);
    print_r($c);
    echo "<br>";

    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");
    $c=array_merge($a1,$a2);  
    print_r($c);
    echo "<br>";

    // The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");
    $c=array_merge_recursive($a1,$a2);  
    print_r($c);
    echo "<br>";
//The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.

    $fname=array("Peter","Ben","Joe");
    $age=array("35","37","43");

    $c=array_combine($fname,$age);
    print_r($c);
    ?>
?>