<?php 

echo "<h1>Lesson 4: Comparison Operators</h1>";

$score = 100;
$highScore = 95;

echo "Is the score equal to the high score? <br>";
var_dump($score == $highScore); // will output: bool(false)

echo "<hr>";

echo "Is the score greater than the high score? <br>";
var_dump($score > $highScore); //Will output: bool(true)

echo "<hr>";

echo "Is the score less than or equal to 100? <br>";
var_dump($score <= 100); //Will output: Bool(true)

echo "<hr>";

$userAge = 25;
$minimumAge = 18;

echo "Is the user's age greater than or equal to the minimum age?<br>";
var_dump($userAge >= $minimumAge); //Will output: bool(true)

echo "<hr>";
echo "<h2>Logical Operators</h2>";

$ageOfUser = 25;
$accountIsActive = true;

echo "Is the user over 18 AND has an active account? <br>";
var_dump($ageOfUser >= 18 && $accountIsActive == true); //Will output: bool(true)
echo "<hr>";

$userIsVip = false;
$userHasCoupon = true;

echo "Does the user get a dicount? (Is VIP or has coupon)<br>";
var_dump($userIsVip == true || $userHasCoupon == true); //Will output: bool(true)
echo "<hr>";


$isLoggedIn = true;
echo "The user is logged in: ";
var_dump($isLoggedIn); //bool(true)
echo "<br>";
echo "Now with NOT(!): ";
var_dump(!$isLoggedIn); //bool(false)

echo "<br>";
echo "<hr>";

$userAge = 15;
$isAccompaniedByAdult = true;
$ticketPrice = 10;

echo "You can enter if you are 18 or older, OR if you are accompanied by an adult. <br>";
var_dump($userAge >= 18 || $isAccompaniedByAdult == true);
echo "<hr>";

echo "A dicount is given if the ticket price is less than 12 AND the user's age is under 16 <br>";
var_dump($ticketPrice < 12 && $userAge < 16);











?>