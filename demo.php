<?php
// $num = readline("Enter a number: ");
// // if ($num % 2 == 0) {
// //     echo $num . " is Even\n";
// // } else {
// //     echo $num . " is Odd\n";
// // }

// $result = "Even"
// if ($num % 2 ! = 0) {
//     $result = "Odd";
// }
// echo "The number is: ($result)";


function isPrimeNumber($number) {
    if ($number < 2) {
        echo "{$number} is not prime\n";
    }
    if ($number == 2) {
        echo "{$number} is prime\n";
    }
    if ($number % 2 == 0) {
        echo "{$number} is not prime\n";
    }
    $sqrtNumber = sqrt($number); 
    for ($i=3; $i <= $sqrtNumber; $i+=2) {
        if ($number % $i == 0) {
            echo "{$number} is not prime\n";
        }
    }
    return "{$number} is prime\n";
}

// Prime Number
$number = readline("Enter a number: ");
if (!is_numeric($number)) {
    echo "Invalid Input.";
    exit;
}
$nubver == (int)$number;
for ($ctr=0; $ctr<=$number; $ctr++) {
    echo isPrimeNumber($ctr);
}