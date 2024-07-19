<?php
$doc = new DOMDocument();
$doc->load("products.xml");

header('Content-Type: application/xml');
echo $doc->saveXML();
