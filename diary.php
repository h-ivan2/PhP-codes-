<?php
$folder="diary";
$file="diary/today.txt";

if(file_exists($folder)){
    echo "Folder exists .<br>";
}else{
    mkdir($folder);
}

if(file_exists($file)){
    echo "File already exists .<br>";
}else{
    $openFile=fopen($file,"w");
    fwrite($openFile,"Diary created today.\n ");
    fclose($openFile);

}

$openFile1=fopen($file,"a+");
fwrite($openFile1,"I learned PHP file handling today.\n");
rewind($openFile1);

echo "First Line: " . fgets($openFile1);
fclose($openFile1);

$contents=file_get_contents($file);

echo "Full contents:<br>" .nl2br($contents) ."<br>";

$source=$file;
$destination="diary/backup_today.txt";

if(copy($source,$destination)){
    echo "Copied successfully .<br>";
}else{
    echo "Unable to make backup .<br>";
}

if(unlink($destination)){
    echo "File deleted successfully .<br>";
}else{
    echo "Unable to delete .<br>" ;
}


if(is_file($file)){
    echo "The today.txt file is really a file.<br>";
}else{
    echo "Not a file .<br>";
}

?>