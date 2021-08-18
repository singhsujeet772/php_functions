<?php
    $a=array("red","green","blue","yellow","brown");

    $result=(array_rand($a,1));
    print_r($result);
    echo $a[$result];

    $my_array = array("red","green","blue","yellow","purple");

    shuffle($my_array);
    print_r($my_array);
?>