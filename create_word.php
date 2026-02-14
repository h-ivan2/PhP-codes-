<?php

require "vendor/autoload.php";

use PhpOffice\PhpWord\Phpword;
use PhpOffice\PhpWord\IOFactory;

//Create new word //Similar like creating a new file in word
$phpWord= new Phpword();

$section=$phpWord->addSection();

$section->addText("Hello I am writing into a word file");
$section->addText("We can add multiple lines");

$writer =IOFactory::createWriter($phpWord,'Word2007');
$writer->save('example.docx');

echo "Word file created successfully";
?>