<?php
session_start();
$_SESSION['loggedin'] = $email;
session_destroy();
$_SESSION['loggedin'] = $email;
header('Location: marketlogin.php');






?>