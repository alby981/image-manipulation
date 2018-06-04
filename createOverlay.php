<?php
$image_1 = imagecreatefromjpeg("/var/www/<domain>/img/template/base.jpg");
$image_2 = imagecreatefromjpeg("/var/www/<domain>/img/template/overlayIMG.jpeg");
list($width, $height) = getimagesize("/var/www/<domain>/img/template/overlayIMG.jpeg");
$dst = imagecreatetruecolor(200, 200);
imagecopyresampled($dst, $image_2, 0, 0, 0, 0, 200, 200, $width, $height);
imagealphablending($image_1, true);
imagesavealpha($image_1, true);
imagecopy($image_1, $dst, 200, 15, 0, 0, 200, 200);
imagejpeg($image_1, "/var/www/<domain>/img/template/out.jpg");
