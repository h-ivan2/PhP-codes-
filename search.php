<?php
$filename="data.txt";
$search="Hello";

$content=file_get_contents($filename);

if(strpos($content,$search) !==false){
    echo "Found !";
}else {
    echo "Not found";
}

?>