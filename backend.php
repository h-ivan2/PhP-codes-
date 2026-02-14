<?php
if(isset($_POST['name']) && isset($_POST['passw'])  &&  isset($_POST['email'])){

$name=$_POST['name'];
$passw=$_POST['passw'];
$email=$_POST['email'];

echo  "<h1> HURRAY  " . $name . "</h1>";
echo "You have successfully logged in";

}
?>
