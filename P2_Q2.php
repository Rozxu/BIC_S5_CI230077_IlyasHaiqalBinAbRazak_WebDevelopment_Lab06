<?php
// Set the content type to an image
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 300);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$green = imagecolorallocate($image, 0, 255, 0); // Green circle
$purple = imagecolorallocate($image, 128, 0, 128); // Purple line

// Draw a green circle
imagefilledellipse($image, 200, 150, 100, 100, $green);

// Draw a purple line
imageline($image, 50, 250, 350, 50, $purple);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
