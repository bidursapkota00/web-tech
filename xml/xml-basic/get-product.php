<?php
$doc = new DOMDocument();
$doc->load("products.xml");

header('Content-Type: application/xml');
echo $doc->saveXML();
// if (file_exists($xmlFile) && is_readable($xmlFile)) {
// $xml = simplexml_load_file("products.xml");

// if ($xml) {
//     header('Content-Type: application/xml');
//     echo $xml->asXML();
// } 
    
// else {
//     http_response_code(500);
//     echo "Failed";
// }
