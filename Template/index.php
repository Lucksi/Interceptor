<?php
# ORIGINAL-CREATOR: Luca Garofalo (Lucksi)
# AUTHOR: Luca Garofalo (Lucksi)
# Copyright (C) 2021-2023 Lucksi <lukege287@gmail.com>
# License: GNU General Public License v3.0

    $value = fopen("Temp/Url.txt","r");
    $opt = fopen("Temp/Geo.txt","r");
    $content = fread($value,filesize("Temp/Url.txt"));
    fclose($value);
    $geo = fread($opt,filesize("Temp/Geo.txt"));
    fclose($opt);
    if($geo == "True"){
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        include_once("Interceptor.php");
        echo "<!DOCTYPE HTML>\n<html>\n\t<head>\n\t\t<title>Redirect</title>\n\t\t<script src = 'Scripts/Geo.js'></script>\n\t</head>\n\t<body onload = Redirect('{$content}','{$language}')></body>\n</html>";
    }
    else{
        include_once("Interceptor.php");
        header ("Location: {$content}");
        echo "<script>alert($geo)</script>";
    }
?>
