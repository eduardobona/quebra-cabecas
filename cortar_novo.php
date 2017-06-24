<?php

// Create image instances
$src = imagecreatefromjpeg('quebracabeca.jpg');
$dest = imagecreatetruecolor(100,100);

imagecopy($dest, $src, 0, 0, 0, 400, 100, 100);

// Copy
// Output and free from memory
//header('Content-Type: image/jpeg');
imagejpeg($dest, '40.jpg');

imagedestroy($dest);
imagedestroy($src);

?>