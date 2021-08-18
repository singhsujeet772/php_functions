<?php
    //returns the key for matched value

    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    if(array_search("red",$a)=="a"){
        echo "hello<br>";
    }
    
    $a=array("a"=>"5","b"=>5,"c"=>"5");
    echo array_search(5,$a,true)."<br>";
    echo array_search("5",$a,true);

?>