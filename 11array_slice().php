<?php
//array_slice(array, start, length, preserve)
//The array_slice() function returns selected parts of an array.

    $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");

    print_r(array_slice($a,0,5,true));
?>