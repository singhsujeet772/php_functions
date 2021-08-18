<?php

//The array_shift() function removes the first element from an array, and returns the value of the removed element.
    $a=array("red","green","blue");
    array_shift($a);
    print_r($a);
    echo "<br>";

//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.
    $a=array("red","green","blue");
    array_unshift($a,"yellow","pink");
    print_r($a);
?>