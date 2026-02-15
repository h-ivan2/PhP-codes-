<?php

require "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create spredsheet object //similar like creating a new file in the working environment

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();

//write the data

$sheet->setCellValue("A1","Name");
$sheet-> setCellValue("B1","Score/20");

$sheet->setCellValue("A2","HIRWA");
$sheet->setCellValue("B2","18");

$sheet->setCellValue("A3","PALOMA");
$sheet->setCellValue("B3","18");

//save the file

$writer=new Xlsx($spreadsheet);
$writer->save("students.xlsx");

echo "File created successfully";
?>  