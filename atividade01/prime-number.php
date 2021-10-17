<?php

    function findPrimeNumber($number) {
        $array = array();
        $i = 2;
        $j = 2;
        $isPrime = true;

        for($i = 2; $i <= $number; $i++) {

            do {
                if($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
                $j++;
            }
            while($j-1 <= $i/2);

            if($isPrime == true) {
                array_push($array, $i);
            }
            $isPrime = true;
            $j = 2;
        }

        print_r ($array);
    }

    findPrimeNumber(20);
?>