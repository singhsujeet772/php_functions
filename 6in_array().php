<?php
    $cars = array("Volvo", "BMW", "Toyota","Toyota",23);

    if(in_array("Volvo",$cars)){
        echo "match found"."<br>";
    }else{
        echo "match not found"."<br>";
    }
    if(in_array("23",$cars,true)){
        echo "match found"."<br>";
    }else{
        echo "match not found"."<br>";
    }
    if(in_array(23,$cars)){
        echo "match found"."<br>";
    }else{
        echo "match not found"."<br>";
    }
?>