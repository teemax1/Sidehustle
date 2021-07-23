<?php

include 'config.php';


$name = $email = $password = '';
	$errors = array('name' => '', 'email' => '', 'password' => '');

	if(isset($_POST['submit'])){
	  	  		// check name
		if(empty($_POST['name'])){
			$errors['name'] = '* A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[A-Za-z\s]+$/', $name)){
				$errors['name'] = '* Name must be letters  only';
			}
		}
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = '* An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = '* Email must be a valid email address';
			}
		}

		// check password
		if(empty($_POST['password'])){
			$errors['password'] = '* A password is required';
		} else{
			$password = $_POST['password'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $password)){
				$errors['password'] = '* Password must be letters and numbers only';
			}
		}	
if (array_filter($errors)) {
  
}else{
	  
	  
	  
	  

    
  
    
    
	  
	  $sql = "INSERT INTO `marketuser`(`username`,`email`,`password`)VALUES('$name','$email','$password')";
	  


    $query= mysqli_query($conn, $sql);
   
    if ($query) {
      session_start();
      $_SESSION['loggedin'] = $email;
       $_SESSION['user'] = $_POST['name'];
        header('Location: marketdash.php');
    } else {
        echo '<section>You Failed to sign up!!!</section>';
    }
}
}
	  





?>




<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Sidehustle</title>
    <link rel="stylesheet" href="market.css" type="text/css" media="all" />
  </head>
  <body>
    <nav> <span> Market  </span>   <a href="marketlogin.php"> Login </a>   </nav>

    
    <div class="container">
      <form action="" method="post">
        
           <h1> Sign up to Marketplace</h1>
     <span> Name</span>  <br/> <input type="text" name="name"  value="<?php echo htmlspecialchars($name) ?>" > <br/>
      <div class="red-text"><?php echo $errors['name']; ?></div>
      <br/>
      
       <span> Email </span>  <br/>  <input type="email" name="email"  value="<?php echo htmlspecialchars($email) ?>" > <br/>
      <div class="red-text"><?php echo $errors['email']; ?></div>
      <br/>
      
      
       <span>  Password </span> <br/> <input type="password" name="password" id="" value="<?php echo htmlspecialchars($password) ?>" > 
       <br/>
      <div class="red-text"><?php echo $errors['password']; ?></div>
      <br />
      <input type="checkbox" name="check" id="" value="<?php $_SESSION['password'];  ?>" /> Remember me </div>
      <br/>
<div class="login2"><button type="submit" name="submit">Sign up</button>


 </div>
</form>
    </div>
    
  </body>
</html>