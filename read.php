<?php

$filename="data.txt";

$content="";

if(file_exists($filename)){
    $file=fopen($filename,"r");
    $content=fread($file,filesize($filename));
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre><?php echo htmlspecialchars($content);?></pre>
    
</body>
</html>