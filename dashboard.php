
<?php
session_start();
$name= $_SESSION['name'];
$email= $_SESSION['email'];
$password= $_SESSION['password'];







?>







<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <body>
    <h1> Welcome to Teemax </h1> <?php

echo $name . "<br/>"; 
echo $email;









?>
<br/>
<button><a href="login.php"> Login </a> </button> <br/>  <br/> <br/>
<button><a href="register.php"> Register </a> </button> 


  </body>
</html>
