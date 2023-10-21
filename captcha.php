<?php

header("Content-type:image/png");
//phpinfo();
session_start();
$_SESSION['code'] = rand(1, 50000);
$im = @imagecreate(250,30) or die("cant ");
//$im = @imagecreatefromjpeg("files/Screenshot.jpeg");

$background_color = imagecolorallocate($im,255,255,255);
$text_color = imagecolorallocate($im,255,0,0);

imagestring($im,5,5,5,$_SESSION['code'] , $text_color);

//imagestringup($im,5,5,200,"sample text",$text_color);

imagejpeg($im);
imagedestroy($im);

?>