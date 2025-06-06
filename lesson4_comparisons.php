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

?>