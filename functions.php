<?php
/*
is_file is a function used to check if something is a file not a folder
 */

/*$file="phpwork/example.txt";

if(is_file($file)){
    echo"this a regular file";
} else{
    echo"This is not a file";
}*/

//file_exists is uded to check whether a file or directory exists

// $folder="phpwork";
// if(file_exists($folder)){
//     echo "Folder exists";
// }else{
//     echo"Folder does not exist";

// }

//fopen ,fwrite ,fclose

// $file="content.txt";
// $fileContents="Hey there this text was written using php";

// $openFIle=fopen($file,"a");
// fwrite($openFIle,$fileContents);
// fclose($openFIle);
// echo "File created successfully";


//fgets() reads one line from a file

// $file="content.txt";
// $openFIle=fopen($file,"r");
// echo fgets($openFIle);
// fclose($openFIle);

//copy()

// $source="content.txt";
// $destination="backup.txt";

// if(copy($source,$destination)){
//     echo "File copied successfully";
// }else{
//     echo "Copy failed";
// }

//unlink() if for deleting the file


// $file="backup.txt";
// if(unlink($file)){
//     echo "File deleted successfully";
// }else{
//     echo "Failed to delete file";
// }

//file_get_contents() for reading the entire file into a string


$file="content.txt";
$contents=file_get_contents($file);
echo $contents;
?>