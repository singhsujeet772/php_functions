<?php

//array_map()
    $a1=array("Horse","Dog","Cat");
    $a2=array("Cow","Dog","Rat");

    function myFunction($v1,$v2){
        if($v1==$v2){
            return "same";
        }
        return "different";
    }
    print_r(array_map("myFunction",$a1,$a2));
?>