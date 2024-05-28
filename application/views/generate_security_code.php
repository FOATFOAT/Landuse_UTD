<?php
session_start();

// Function to generate a random security code
function generateSecurityCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

// Generate a random security code and store it in the session
$securityCode = generateSecurityCode();
$_SESSION['security_code'] = $securityCode;

// Set the content type to image/png
header('Content-type: image/png');

// Create a blank image with a white background
$image = imagecreate(150, 50);
$background_color = imagecolorallocate($image, 255, 255, 255);

// Set the text color to black
$text_color = imagecolorallocate($image, 0, 0, 0);

// Add the security code text to the image
imagettftext($image, 20, 0, 20, 35, $text_color, 'path/to/your/font.ttf', $securityCode);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>