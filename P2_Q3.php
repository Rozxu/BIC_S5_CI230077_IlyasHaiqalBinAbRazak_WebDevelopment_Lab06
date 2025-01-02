<?php
// Set the content type to an image
header("Content-Type: image/png");

// Create an image canvas with a light gray background
$image = imagecreate(400, 200);
$light_gray = imagecolorallocate($image, 211, 211, 211); // Light gray background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Specify the path to a TrueType font
$font_path = __DIR__ . '/arial.ttf'; // Ensure the 'arial.ttf' font file exists in the same directory

// Add personalized greeting using the TrueType font
$text = "Hello, User!";
$font_size = 20; // Font size
$x = 50; // X-coordinate
$y = 100; // Y-coordinate

// Check if the font file exists
if (file_exists($font_path)) {
    imagettftext($image, $font_size, 0, $x, $y, $black, $font_path, $text);
} else {
    // Display an error message on the image if the font is missing
    imagestring($image, 5, 50, 80, "Font file not found!", $black);
}

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>

