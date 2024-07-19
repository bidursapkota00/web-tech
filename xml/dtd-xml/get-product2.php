<?php
$randomNumber = rand();

$productData = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE products SYSTEM "products.dtd">
<products>
    <product>
        <name>Product Name ' . $randomNumber . '</name>
        <price>19.99</price>
        <description>A brief description of the product.</description>
    </product>
</products>';


// Validate XML against DTD
$doc = new DOMDocument();
$doc->loadXML($productData);
if (!$doc->validate()) {
    echo "Invalid xml document";
    exit;
}

header('Content-Type: application/xml');

echo $productData;
