<?php
include 'config.php';
$email = $password = '';
	$errors = array( 'email' => '', 'password' => '');
	
	
if(isset($_POST['login'])){
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
    
  
  
  
  
  
  
  $email = mysqli_real_escape_string($conn,$_POST['email']);

    $password = mysqli_real_escape_string($conn,$_POST['password']);

    
    $sql = "SELECT email,password FROM `marketuser` WHERE (`email` ='$email') AND (`password`= '$password')";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);

	


if ($count > 0) {
    $row = mysqli_fetch_assoc($query);
	session_start();
	
		$_SESSION['loggedin'] = $email;
	$_SESSION['user'] = $name;
		header('Location:marketdash.php');
}
else{
	echo "<section>Email or password is wrong!!!</section>".mysqli_error($conn);


}
  
}
	
		}
		
		
  

	
	
	

	
		
		
		
		


		

		







?>






<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    
    <title></title>
        <link rel="stylesheet" href="market.css" type="text/css" media="all" />
  </head>
  <body>
        <nav> <span> Market  </span>   <a href="marketreg.php"> Sign Up </a>   </nav>
  
        <div class="container">
            <h1>Login Here</h1>
    <form action="" method="post" accept-charset="utf-8">
       <span> Email</span>  <br/> <input type="email" name="email" id="" value="<?php echo htmlspecialchars($email) ?>" />
     <br/>
        <div class="red-text"><?php echo $errors['email']; ?></div>
      
     <br />
       <span>  Password</span>    <br/>  <input type="password" name="password" id="" value="<?php echo htmlspecialchars($password) ?>" />
      <br/>
         <div class="red-text"><?php echo $errors['password']; ?></div>
      
      <br/>
      
    <div class="login1"><button type="submit" name="login">Login</button>
       
 </div>

    </form>
    
    
    
    </div>
  </body>
</html>