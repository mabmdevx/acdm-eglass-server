<?php

$newocr_api_key = "xyz";

$ch = curl_init('http://api.newocr.com/v1/ocr?key='.$newocr_api_key.'&file_id=123&page=1&lang=eng&psm=6');
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
echo $result;
curl_close($ch);

?>