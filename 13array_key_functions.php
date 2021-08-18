<?php
// array_keys
// array_key_first
// array_key_last
// array_key_exists
// key_exists

//The array_keys() function returns an array containing the keys.

    $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
    print_r(array_keys($a,"Highlander"));

//use these functions in php 7.3.0 or above
    print_r(array_key_first($a));
    print_r(array_key_last($a));

//The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.

    $b=array_key_exists("Volvo",$a);
    if($b==true){
        echo "hello world";
    }else{
        echo "hi";
    }

?>