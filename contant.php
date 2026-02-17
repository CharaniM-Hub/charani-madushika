<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<" .$email.">\r\n";

$recipient = "abcperera06@gmail.com";
mail($recipient,$message,$mailheader)
or die("Error !");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charani Madushika Perera</title>
    <link rel="icon" type="image/x-icon" href="profile3.png">
    <link rel="stylesheet" href="resume.css">

</head>
<body>

  <div class="end">
    <h1>Thank you for contacting me.I will get back to you as soon as posible</h1>
    <p class="back" >Go back to the <a href="index.html">Homepage</a></p>
  </div>

</body>
</html>

';
?>





