<?php
//scenario
//1.check if file exists if not create it 

$filename="notes.txt";

if(file_exists($filename)){
    echo"File exists .<br>";
}else{

    $contents="This file was created using php file functions ";
    $openFile=fopen($filename,"w");
    fwrite($openFile,$contents);
    fclose($openFile);
    echo"File created successfully. <br>";
}

//open file in read and write mode  and add a new line

$file=fopen($filename,"r+");// file is opened with the pointer on start
fwrite($file,"Learning PHP file handling is interesting \n");//after writing the pointer is moved to the end of  the line I just wrote 
rewind($file);// moves the pointer back to the start
echo "First line:" .  fgets($file) . "<br>";//reads the first line of the file
fclose($file);

//read the whole contents
$contents1=file_get_contents($filename);
echo "Full content:<br>" . nl2br($contents1) ."<br>";

//copying the file
$source="notes.txt";
$destination="notes_backup.txt";
if(copy($source,$destination)){
    echo"File copied successfully . <br>";
}else{
    echo "Unable to copy file .<br>";
}
//deleting the file
if(unlink($destination)){
    echo"Backup  deleted successfully.<br>";
}else{

echo "Unable to delete backup .<br>";
}

?>