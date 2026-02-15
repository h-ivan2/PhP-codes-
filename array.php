<?php
//$fruits=array("apple","Banana","Cherry","Mango","Avocado");
//echo $fruits[0]; 
 echo "\n" ;/*
echo count($fruits);
echo "\n";


foreach($fruits as $value){
    echo $value . "\n";

}

$i=0;
while($i <count($fruits)){
    echo $fruits[$i] ."\n";
    $i++;
}*/

// for($k=0;$k<count($fruits);$k++){
//     echo $fruits[$k] ."\n";
    
// }
// var_dump($fruits);


$numbers[0]=10;
$numbers[1]=20;
$numbers[2]=30;
$numbers[3]=40;
$numbers[4]=50;

$sum=0;

//echo count($numbers) . "\n";
for($i=0;$i<count($numbers);$i++){
    $sum+=$numbers[$i];

}

$average= $sum/count($numbers);

echo "The average of the numbers is " . $average; 
echo "\n";

function computeAverage($marks){
    $sum=0;

    foreach($marks as $mark){
        $sum+=$mark;
    }

    $average =$sum/count($marks);
    return $average;
}

$marks=[10,20,30,40,50];

$average=computeAverage($marks);

echo 'The average of the numbers is: ' .$average;
?>