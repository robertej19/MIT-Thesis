<?php

$pdf_url = "https://github.com/robertej19/MIT-Thesis/raw/main/main.pdf";
$cache_file = "example.pdf";

// Check if the PDF is already cached
if (!file_exists($cache_file)) {
    // Request the PDF
    $pdf_content = file_get_contents($pdf_url);

    // Store the PDF in cache
    file_put_contents($cache_file, $pdf_content);
}

// Serve the cached PDF
header('Content-Type: application/pdf');
readfile($cache_file);

?>
