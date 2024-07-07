<?php
// Open a file for reading
$file = fopen("php\\example.txt", "r");

// Check if the file was opened successfully
if ($file) {
    echo "File opened successfully.\n";

    // Perform operations on the file (e.g., reading data)
    $contents = fread($file, filesize("php\\example.txt"));
    echo $contents;

    // Close the file handle to free the resource
    fclose($file);
} else {
    echo "Failed to open the file.";
}
