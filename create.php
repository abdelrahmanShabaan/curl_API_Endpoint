<?php
header('Access-Control-Allow-origin:*');
header('Content-type:application/json');
header('Access-Control-Allow-Mehtods:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Controller-Allow-Headers,Authorization,X-Request-With');

$data = file_get_contents("php://input");

$fook = json_decode($data,true);

print_r($fook);