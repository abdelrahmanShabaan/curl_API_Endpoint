<?php

$api = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=");
$news = json_decode($api,true);
?>
