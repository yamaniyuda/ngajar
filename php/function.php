<?php


function kalkulator(string $operasi, ...$numbers) {
    
    if ($operasi == "perkalian") {
        $total = 1;
        foreach ($numbers as $number) {
            $total = $total * $number;
        }
        echo "Total dari<br>";
        echo implode(" * ", $numbers) . " = " . $total;
    }

    if ($operasi == "pengurangan") {
        $total = $numbers[0];
        $new_numbers = $numbers;
        unset($new_numbers[0]);

        foreach ($new_numbers as $number) {
            $total -= $number;
        }
    }

    if ($operasi == "pembagian") {
        $total = $numbers[0];
        
        for ($i = 1; $i < count($numbers); $i++) {
            $total /= $numbers[$i];
        }
    }
}



kalkulator("perkalian", 5, 20, 5, 4, 3);


function sumAll(...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "Total dari<br>";
    echo implode(" + ", $numbers) . " = " . $total;
}


/*
    [3, 3, 10, 39, 20, 10, 44, 20]
    implode(" + ",  [3, 3, 10, 39, 20, 10, 44, 20])
    "3 + 3 + 10 + 39 + 20  + 10 + 44 + 20"
*/