<?php
//array_walk
    $a=array("a"=>"red","b"=>"green","c"=>"blue");

    function myFunction($keys,$values,$p){
        echo $keys .$p .$values."<br>";
    }
    array_walk($a,"myFunction"," has the key ");

//array_walk_recursive

    function myfunction1($value,$key)
    {
    echo "The key $key has the value $value<br>";
    }
    $a1=array("a"=>"red","b"=>"green");
    $a2=array($a1,"1"=>"blue","2"=>"yellow");
    array_walk_recursive($a2,"myfunction1");
?>