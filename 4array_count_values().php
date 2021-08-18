<?php
    $cars = array("Volvo", "BMW", "Toyota","Toyota");
    $a = array("yellow","pink","purple");

    $b=array_count_values($cars);
    $c=array_count_values($a);

    print_r($b);
    echo "<br>";
    print_r($c);

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>