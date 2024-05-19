<?php
// Define the function to calculate the area of a rectangle
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with specific values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

// Display the result
echo "<b>The area of a rectangle with a width of $width and a height of $height is $area</b>";
?>

