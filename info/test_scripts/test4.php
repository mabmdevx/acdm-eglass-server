<?php
ini_set("display_errors",1);

//  tesseract uploads/ocr-test.jpg uploads/ocr-test

$path_upload = "uploads/";
$path_output = "uploads/";

exec("tesseract ".$path_upload."ocr-test.jpg ".$path_output."ocr-test");

echo file_get_contents($path_output."ocr-test.txt");
?>

