<?php
// The array_flip() function flips/exchanges all keys with their associated values in an array.

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

    print_r(array_flip($a1));
    echo "<br>";
//The array_change_key_case() function changes all keys in an array to lowercase or uppercase

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    print_r(array_change_key_case($age,CASE_LOWER));
    print_r(array_change_key_case($age,CASE_UPPER));
?>