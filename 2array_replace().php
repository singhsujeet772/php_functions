<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $a = array("yellow","pink","purple");

    $b=array_replace($cars,$a);

    echo "<pre>";
    print_r($b);
    echo "</pre>";

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>