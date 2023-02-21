<?php

$cp = curl_init();
curl_setopt($cp, CURLOPT_URL , "https://randomuser.me/api/");
curl_setopt($cp, CURLOPT_RETURNTRANSFER,true);
$resp = curl_exec($cp);
$resp = json_decode($resp,true);
print_r( $resp["results"][0]["name"]);