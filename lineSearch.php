<?php


$filename="data.txt";
$search="sample";

$handle=fopen($filename,"r");

if($handle){
    while(($line=fgets($handle)) !==false) {
        if(strpos($line,$search) !==false){
            echo "Found: " .$line;
        }
    }
    fclose($handle);
}
?>