<?php
// array_intersect
// array_intersect_key
// array_intersect_assoc
// array_intersect_uassoc
// array_intersect_ukey
// array_uintersect
// array_uintersect_assoc
// array_uintersect_uassoc

//The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");

    $result=array_intersect($a1,$a2);
    print_r($result);
    echo "<br>";

//The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","b"=>"green","c"=>"blue");

    $result=array_intersect_key($a1,$a2);
    print_r($result);
    echo "<br>";

//The array_intersect_assoc() function compares the keys and values of two (or more) arrays, and returns the matches.

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","b"=>"green","c"=>"blue");

    $result=array_intersect_assoc($a1,$a2);
    print_r($result);
    echo "<br>";

//The array_intersect_uassoc() function compares the keys and values of two (or more) arrays, and returns the matches.

//Note: This function uses a user-defined function to compare the keys!

//This function compares the keys and values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

    function myFunction($a,$b){
        if($a===$b){
            return 0;
        }
        return($a>$b)?1:-1;
    }
    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
    $a2=array("a"=>"red","b"=>"green","d"=>"blue");

    $result=array_intersect_uassoc($a1,$a2,"myfunction");
    print_r($result);
    echo "<br>";

// The array_intersect_ukey() function compares the keys of two (or more) arrays, and returns the matches.

// Note: This function uses a user-defined function to compare the keys!
    
// This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc

    function myfunction1($a,$b)
    {
    if ($a===$b)
    {
    return 0;
    }
    return ($a>$b)?1:-1;
    }

    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
    $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

    $result=array_intersect_ukey($a1,$a2,"myfunction1");
    print_r($result);
    echo " <br>";
?>