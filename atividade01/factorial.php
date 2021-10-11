<?php

    function calculateFactorial($number) {
        $array = array(1);
        $temp = 0;
        $i = 2;

        if($number > 0) {
            array_push($array, 1);

            while($i <= $number) {
                array_push($array, $array[count($array)-1] * $i);
                $i++;
            }
        }

        print_r($array);
    }

    calculateFactorial(5);
?>