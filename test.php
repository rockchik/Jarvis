<?php
//error_reporting(E_ALL);

$url ="http://api.program-o.com/v2/chatbot/?bot_id=6&say=what%20is%20your%20name&convo_id=exampleusage_1231232&format=json";

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);


$result = curl_exec($cURL);

?>
