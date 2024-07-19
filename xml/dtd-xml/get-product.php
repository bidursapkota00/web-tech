<?php
// $xml = simplexml_load_file("products.xml");

// if ($xml) {
// Validate XML against DTD
$doc = new DOMDocument();
$doc->load("products.xml");
if (!$doc->validate()) {
    echo "Invalid xml document";
    exit;
}

header('Content-Type: application/xml');
echo $doc->saveXML();
// }
