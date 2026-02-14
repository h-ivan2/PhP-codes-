<!DOCTYPE html>
<html>
<head>
<title>program</title>
<style>
.paloma{
    text-align: center;
    color: black;
    font-size: 2.5em;
    margin: 20px 0;
    padding: 10px;
    width: 100%;
}
body{
background-color:#c4e1f6;
}
#hirwa{
background-color: #2ECC71;
color:black;
margin:30px  auto;
border-radius:15px;
padding:20px;
width:400px;
border:3px solid #1e7d4f;
}
#yvan{
margin-bottom: 15px;

}
#aga{
display:block;
}
label{
display: block;
font-weight: bold;
margin-bottom:3px;
}
button{
border-radius:10px;
padding:10px 20px;
background: #007BFF;
color: white;
font-weight: bold;
margin-top:5px;
border:none;
cursor:pointer;
}
input{
width:95%;
padding: 6px;
margin-bottom:12px;
border-radius:5px;
border:1px solid #333;
}

button:hover{
background-color: #0056b3;
}
#output{
margin-top:15px;
font-weight: bold;
display:block;
}

</style>
</head>
<body>
<h1 class="paloma">Php program</h1>
<div id="hirwa">
<form action="" method="POST">
<div id="yvan"><label for="num1">Enter your number: </label><input type="number" id="num1" name="num1" required></div>
<div><label for="num2">Enter your second number: </label><input type="number" id="num2" name="num2" required></div>
<button type="submit" value="Calculate">Calculate</button>
</form>
<div id="output">
<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){

$num1=$_POST['num1'];
$num2=$_POST['num2'];

if($num1%2==0 && $num2%2==0){
  $sum=$num1+$num2;
 echo"The sum of the two even numbers is ". $sum;
}else if($num1%2!=0 && $num2%2!=0){
  $product=$num1*$num2;
  echo"The product of the two odd numbers is " . $product;

}else{
echo"";
}
}
?>
 </div>
</div>
</body> 
</html>
