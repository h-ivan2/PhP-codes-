<!DOCTYPE html>
<html>
<head><title>php</title>
<style>
body{
background-color:aquamarine;
}

</style>
</head>
<body>
<h1>simple program</h1>
<form action="" method="POST">
<label  for=" name">Name</label> <input type="text" id="name" name="name" required>
<label for="age">Age</label> <input type="number" id="age" name="age" required>
<button type="submit">Submit</button>
</form>

<?php
if(isset($_POST['name']) && isset($_POST['age'])){

$name = $_POST['name'];
$age = $_POST['age'];

if($age<=0){
echo "invalid age";
}else{
echo "Your name is " . $name . " and your age is " . $age . ".";
}


} 
?>
</body>
</html>
