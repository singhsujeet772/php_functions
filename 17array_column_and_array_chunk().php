<?php
// The array_column() function returns the values from a single column in the input array.

    $a = array(
        array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
        ),
        array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
        ),
        array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
        )
    );

    print_r(array_column($a,'first_name','id'));
    echo "<br>";

//The array_chunk() function splits an array into chunks of new arrays.

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");

    print_r(array_chunk($age,2,true))
?>