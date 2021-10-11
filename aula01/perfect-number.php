<?php

    function findPerfectNumber($number) {
        $temp = 0;
        $i = 1;

        while($i <= $number/2) {
            if($number % $i == 0) {
                $temp += $i;
            }
            $i++;
        }

        if($number == $temp) {
            echo "$number é perfeito <br>";
        }
        else {
            echo "$number não é perfeito <br>";
        }
    }

    $number_to_test_1 = 6;
    $number_to_test_2 = 28;
    $number_to_test_3 = 10;

    findPerfectNumber($number_to_test_1);
    findPerfectNumber($number_to_test_2);
    findPerfectNumber($number_to_test_3);

?>