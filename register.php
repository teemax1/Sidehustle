<?php




$name = $email = $password = '';
	$errors = array('name' => '', 'email' => '', 'password' => '');

	if(isset($_POST['submit'])){
	  session_start();
$_SESSION['name'] = $_POST['name'];

$_SESSION['email'] = $_POST['email'];

$_SESSION['password'] = $_POST['password'];
	  
	 
	  		// check name
		if(empty($_POST['name'])){
			$errors['name'] = 'A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[A-Za-z\s]+$/', $name)){
				$errors['name'] = 'Name must be letters  only';
			}
		}
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check password
		if(empty($_POST['password'])){
			$errors['password'] = 'A password is required';
		} else{
			$password = $_POST['password'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $password)){
				$errors['password'] = 'Password must be letters and numbers only';
			}
		}	
if (array_filter($errors)) {
  
}else {
  header('Location:dashboard.php');
}

}


?>




<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Sidehustle</title>
    <link rel="stylesheet" href="new.css" type="text/css" media="all" />
  </head>
  <body>
   <h3> Register to Teemax</h3>
    
    <div>
      <form action="register.php" method="post">
      Name  <input type="text" name="name"  value="<?php echo htmlspecialchars($name) ?>" > <br/>
      <div class="red-text"><?php echo $errors['name']; ?></div>
      <br/>
      
     Email  <input type="email" name="email"  value="<?php echo htmlspecialchars($email) ?>" > <br/>
      <div class="red-text"><?php echo $errors['email']; ?></div>
      <br/>
      
      
      Password <input type="password" name="password" id="" value="<?php echo htmlspecialchars($password) ?>" > 
       <br/>
      <div class="red-text"><?php echo $errors['password']; ?></div>
      <br />
      <input type="checkbox" name="check" id="" value="<?php $_SESSION['password'];  ?>" /> Remember me <br/>
      
<button type="submit" name="submit">Register</button>
or 
 <br/> <br/>
<button><a href="login.php"> Login </a> </button> 
</form>
    </div>
    
  </body>
</html>