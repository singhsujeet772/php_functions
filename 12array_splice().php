<?php
//array_splice(array, start, length, array)
//The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"purple","b"=>"orange");
    array_splice($a1,0,2,$a2);
    print_r($a1);
    
?>