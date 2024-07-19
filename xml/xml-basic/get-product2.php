<?php

$productData = '<?xml version="1.0" encoding="UTF-8"?>
<products>
    <product>
        <name>Product Name ' . rand() . '</name>
        <price>19.99</price>
        <description>A brief description of the product.</description>
    </product>
    <product>
        <name>Product Name ' . rand() . '</name>
        <price>19.99</price>
        <description>A brief description of the product.</description>
    </product>
</products>';

header('Content-Type: application/xml');

echo $productData;
