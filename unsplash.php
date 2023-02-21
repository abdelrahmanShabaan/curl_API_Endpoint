<?php
/**
 * Here i learn how to practice and connect with extrnal endpoint  with authorization
 * and how to see headers return with response
 */
$cp = curl_init();
$headers = ["Authorization: Client-ID axOusnh0fQRaBVexCCxHrPlXRjHumNsD4BYzu-lYJoE"];
$respone_headers = [];

$all_headers = function($cp,$header) use(&$respone_headers){
    $len = strlen($header);
    $respone_headers[] = $header;
    return $len;
};

curl_setopt_array($cp,[
   CURLOPT_URL => "https://api.unsplash.com/photos" ,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_HTTPHEADER => $headers,
   CURLOPT_HEADERFUNCTION => $all_headers
]);
$respone = curl_exec($cp);
// $code = curl_getinfo($cp,CURLINFO_HTTP_CODE);
// $content_type = curl_getinfo($cp,CURLINFO_CONTENT_TYPE);
// echo $code; 
// echo "\n";
// echo $content_type; 

print_r($respone_headers);