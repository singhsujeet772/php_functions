<?php
//array_reduce()
    function myFunction($n,$m){
        echo $n,"-".$m;
    }
    function myFunction1($p,$q){
        return $p * $q;
    }
    $a=['orange','apple','grapes'];
    $b=[1,2,3,4,5];

    $res=array_reduce($a,"myFunction");
    $res1=array_reduce($b,"myFunction1",1);

    print_r($res1);
?>