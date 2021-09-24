<?php

$file = $_FILES['file'];
$filename = explode('.', $file['name']);
$filename = $filename[0].'.txt';
$filedir = $file['tmp_name'];

require_once('classe/PdfParser.php');
$pdf_reader = new PdfParser;
$content = $pdf_reader->parseFile($filedir);

header("Content-Disposition: attachment; filename=\"".$filename."\"");
header("Content-Type: application/force-download");
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header("Content-Type: text/plain");

echo $content;