<?php
//extract(array, extract_rules, prefix)
// The extract() function imports variables into the local symbol table from an array.

// This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

// This function returns the number of variables extracted on success.

    $a = "Original";
    $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
    extract($my_array);
    echo "\$a = $a; \$b = $b; \$c = $c";
    echo "<br>";

    $a = "Original";
    $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

    extract($my_array, EXTR_PREFIX_SAME, "dup");

    echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";
    echo "<br>";

//compact(var1, var2...)

// The compact() function creates an array from variables and their values.

// Note: Any strings that does not match variable names will be skipped.

    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";

    $result = compact("firstname", "lastname", "age");

    print_r($result);

?>