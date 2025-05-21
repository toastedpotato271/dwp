<?php
// Odd or Even Number Checker
echo "\nOdd or Even Checker\n";
$num = readline("Enter a number: ");
$result = "Even";
if ($num % 2 != 0) {
    $result = "Odd";
}
echo "The number {$num} is: {$result}\n";

// Prime Number Checker
echo "\nPrime Number Checker\n";
$number = readline("Enter a number: ");
if (!is_numeric($number)) {
    echo "Invalid input. Please enter a number.\n";
    exit;
}
$number = (int) $number;
for ($ctr = $number; $ctr >= 0; $ctr--) {
    echo checkPrime($ctr);
}

// Prime Checker Function
function checkPrime($number) {
    if ($number < 2) {
        return "{$number} is not prime\n";
    }
    if ($number === 2) {
        return "{$number} is prime\n";
    }
    if ($number % 2 === 0) {
        return "{$number} is not prime\n";
    }

    $sqrtNumber = sqrt($number);
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i === 0) {
            return "{$number} is not prime\n";
        }
    }
    return "{$number} is prime\n";
}

// Composer Dependecies 
require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use Faker\Factory;

// Slugify
$slugify = new Slugify();
echo "Slugified: " . $slugify->slugify("This is the new sample text.") . "\n";

// UUID
$uuid = Uuid::uuid4();
echo "Generated UUID: " . $uuid->toString() . "\n";

// Faker
$faker = Factory::create();
echo "Fake Name: " . $faker->name() . "\n";
echo "Fake Email: " . $faker->email() . "\n";
echo "Fake Text: " . $faker->text() . "\n";