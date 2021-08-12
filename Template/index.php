<?php
include_once("Interceptor.php");
$value = fopen("../Temp/Url.txt","r");
$content = fread($value,filesize("../Temp/Url.txt"));
fclose($value);
header ("Location: {$content}");
?>