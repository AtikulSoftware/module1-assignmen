<?php
//Task 5: Weather Report

// Define the temperature variable
$temperature = 23;

// Provide weather information based on the temperature
if ($temperature <= 0) {
    echo "It's freezing!";
} elseif ($temperature <= 15) {
    echo "It's cool.";
} elseif ($temperature <= 25) {
    echo "It's warm.";
} else {
    echo "It's hot!";
}
