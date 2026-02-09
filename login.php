xxxx<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
<style>
body{
    background-color:lightblue ;
    padding: 20px;
    
}
.form {
    background-color: lightgreen;
    border-radius: 10px;
    border: 1px solid red;
    text-align: center;
    margin: 50px auto;
    padding: 30px;



}

.form input,
 .form textarea{
  border-radius: 10px;
  padding: 10px;
  width: auto;
  height: auto;
  border: 2px solid black;
  font-weight: bold;
  width: 95%;
  margin-bottom: 12px;
  font-size: 15px;



}
.name ,.text, .email, .phone{
    padding-bottom: 10px;
}
label{
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    text-align: left;
    
}
button{
    border-radius: 10px;
    font-weight: bold;
    margin-top: 5px;
    font-size: 15px;
    width: 30%;
    color: black;
    background-color: aqua;
    border: 2px solid black;

}
h2{
    text-align: center;
}

</style>
</head>
<body>
    <h2>Register</h2>
<section class="form">
<form action="" method="POST">
<div class="name">
<label for="name">Name:</label>
<input type="text" id="name" name="name"  required>
</div>

<div class="email">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
</div>
<div class="phone">
    <label for="phone" >Enter phone number:</label>
    <input type="number" id="phone" name="phone" required>
</div>

<div class="text">
    <label for="text">Enter your message:</label>
    <textarea id="text" name="text" required ></textarea>
</div>
<div>
    <button type="submit" name="submit">Submit</button>
</div>
</form>
</section>



<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
if(isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['text'])){

$name=htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$phone=htmlspecialchars($_POST['phone']);
$text=htmlspecialchars($_POST['text']);



$file=fopen("messages.txt", "a");
fwrite($file, "Name: $name\nEmail:$email\nPhone:$phone\nMessage:$text\n\n");
fclose($file);


echo "Your message has been sent successfully Thank u for ur work !";

}else { 
    echo "Please fill out all fields i.e all fields are required ";

}
}

?>
   </body>
   </html>
