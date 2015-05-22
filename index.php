<?php
// Set the content-type
header('Content-Type: image/png');
$path=dirname(__FILE__);
// Create the image
$im = imagecreatefromjpeg($path.'/cert.jpg');

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);


// The text to draw
$text = 'Rishi';
// Replace path by your own font path

$font = $path.'/batmfa__.ttf';

// Add the text
imagettftext($im,25, 0, 350, 220, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>
