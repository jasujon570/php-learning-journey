<?php
    echo "<h1>Lesson 5: If Statements</h1>";
    echo "<hr>";

    $userAge = 20;
    $minimumAge = 18;

    if ($userAge >= $minimumAge) {
        // This code only runs if the condition is true
        echo "Welcome! You are old enough to enter";
    }

    $userAge = 16;
    $minimumAge = 18;

    echo "<hr>";
    if ($userAge >= $minimumAge) {
        // This part is skipped because the condition is false
        echo "Welcome! You are old enough to enter.";
    } else {
        // This code runs because the condition was false
        echo "Sorry, you are not old enough to enter.";
    }

    $dayOfWeek = "Wednesday"; // Let's pretend this is the current day

    echo "<hr>";

    if($dayOfWeek == "Saturday") {
        echo "It's the weekend! Time to relax!";
    } elseif ($dayOfWeek == "Firday") {
        echo "It's Friday! The weekend is almost here!";
    } else {
        echo "It's a weekday. Time to work!";
    }
    echo "<br>";
    

    $score = 85;
    echo "<hr>";
    if($score >= 90) {
        echo "Grade: A";
    }elseif($score >= 80) {
        echo "Grade: B";
    }elseif($score >= 70){
        echo "Grade: C";
    }elseif($score >= 60) {
        echo "Grade: D";
    }else {
        echo "Grade: F";
    }


?>