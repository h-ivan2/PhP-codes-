<!DOCTYPE html>
<html>
<head>
<title>Muliplication Table</title>
<style>
table, tr , td {
border:2px solid black;
border-collpase:collpse;
}
</style>
</head>

<body>
  
<table>
<?php
for ($i=1;$i<=10;$i++){
 echo "<tr>"; 
   for($j=1;$j<=15;$j++){
      $answer= $j*$i;

  echo "<td>".$j . "x" . $i . "=" . $answer  . "</td>";
}
 echo "</tr>";
} 
?>
</table>
</body>
</html>

