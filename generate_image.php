<?php
// Set the content type to an image
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 100);

// Define colors
$blue = imagecolorallocate($image, 0, 0, 255); // Blue background
$white = imagecolorallocate($image, 255, 255, 255); // White text

// Add text
imagestring($image, 5, 50, 40, "Welcome to Our Shop!", $white);

// Output the image
imagepng($image);
imagedestroy($image);
?>
