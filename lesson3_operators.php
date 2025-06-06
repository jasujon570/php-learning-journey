<?php

echo "<h1>Lesson 3: PHP Operators</h1>";

$num1 = 15;
$num2= 5;

echo "Our two numbers are $num1 and $num2.";
echo "<hr>"; //An HTML horizontal rule for separation

// Addition
$sum = $num1 + $num2;
echo "Addition (+) -> $num1 + $num2 = $sum <br>";

// Substraction
$difference = $num1 - $num2;
echo "Substraction (-) -> $num1 - $num2 = $difference <br>";

// Multiplication
$product = $num1 * $num2;
echo "Multiplication (*) -> $num1 * $num2 = $product <br>";

// Division
$quotient = $num1 / $num2;
echo "Division (/) -> $num1 / $num2 = $quotient <br>";

// Modulus (Reminder)
$reminder = 16 % 5; // 16 divided by 3 with a reminder of 1
echo "Modulus (%) -> 16 % 5 = $reminder <br>";
echo "<hr>";

$itemPrice = 19.99;
$quantity = 3;
$taxRate = 0.05;

$subTotal = $itemPrice * $quantity;
$totalTax = $subTotal * $taxRate;
$grandTotal = $subTotal + $totalTax;

echo "Subtotal: $subTotal <br>";
echo "Tax: $totalTax <br>";
echo "Total: ".number_format($grandTotal, 2);









?>