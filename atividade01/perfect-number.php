<?php

    function findPerfectNumber($number) {
        $array = array();
        $temp = 0;
        $i = 1;
        $j = 1;

        for($i = 1; $i <= $number; $i++) {
            $j = 1;
            while($j <= $i/2) {
                if($i % $j == 0) {
                    $temp += $j;
                }
                $j++;
            }
            
            if($i == $temp) {
                array_push($array, $i);
            }
            $temp = 0;
        }

        print_r ($array);
    }

    findPerfectNumber(500);

?>