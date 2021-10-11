<?php

    $a = 1;
    $b = 1;
    $result;

    $i = 0;
    $loops = 10;

    print "$a $b ";

    do {
        $result = $a + $b;
        $a = $b;
        $b = $result;
        echo "$result ";
        $i++;
    }
    while($i < $loops);

?>