<?php
$name = "/temporarydir";
$myfiles = scandir(__DIR__ .$name);
 print_r($myfiles);
?>