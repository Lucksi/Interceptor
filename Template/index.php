<?php
# AUTHOR: Luca Garofalo (Lucksi)
# Copyright (C) 2021-2022 Lucksi
# License: GNU General Public License v3.0

include_once("Interceptor.php");
$value = fopen("../Temp/Url.txt","r");
$content = fread($value,filesize("../Temp/Url.txt"));
fclose($value);
header ("Location: {$content}");
?>
