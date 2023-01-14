<?php
# ORIGINAL-CREATOR: Luca Garofalo (Lucksi)
# AUTHOR: Luca Garofalo (Lucksi)
# Copyright (C) 2021-2023 Lucksi <lukege287@gmail.com>
# License: GNU General Public License v3.0

include_once("Interceptor.php");
$value = fopen("../Temp/Url.txt","r");
$content = fread($value,filesize("../Temp/Url.txt"));
fclose($value);
header ("Location: {$content}");
?>
