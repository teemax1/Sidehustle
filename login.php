<?php
$email = $password = '';
	$errors = array( 'email' => '', 'password' => '');
if(isset($_POST['login'])){
  session_start();
  $name= $_SESSION['name'];
$email= $_SESSION['email'];
$password= $_SESSION['password'];
if ($email===$email && $password===$password) {
	
	
	
		 //check email
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
  header('Location: dashboard.php');
}
	
		}
		
		else {
		  header('Location: login.php');
		  
		}
	
		
		
		
		


		

		
	}







?>






<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <body>
    <h1>Login Here</h1>
    
    <form action="login.php" method="post" accept-charset="utf-8">
     Email <input type="email" name="email" id="" value="<?php echo htmlspecialchars($email) ?>" />
     <br/>
        <div class="red-text"><?php echo $errors['email']; ?></div>
      
     <br />
      Password <input type="password" name="password" id="" value="<?php echo htmlspecialchars($password) ?>" />
      <br/>
         <div class="red-text"><?php echo $errors['email']; ?></div>
      
      <br/>
      
      <button type="submit" name="login">Login</button>
       <br/> <br/>
<button><a href="register.php"> Register </a> </button> 
    </form>
    
    
    
    
  </body>
</html>