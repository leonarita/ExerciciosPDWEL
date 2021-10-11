<?php

    function findPrimeNumber($number) {
        $array = array();
        $i = 2;
        $j = 2;
        $isPrime = true;

        for($i = 2; $i <= $number; $i++) {

            while($j <= $i/2) {
                if($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
                $j++;
            }

            if($isPrime == true) {
                array_push($array, $i);
            }
            $isPrime = true;
        }

        print_r ($array);
    }

    findPrimeNumber(20);
?>