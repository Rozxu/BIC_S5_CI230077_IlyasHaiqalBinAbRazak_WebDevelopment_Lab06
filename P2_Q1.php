<?php
// Set the content type to an image
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Yellow background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Add bold text
imagestring($image, 5, 80, 40, "100 Items Sold", $black);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
