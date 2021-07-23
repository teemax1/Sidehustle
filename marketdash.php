
<?php
include 'config.php';
session_start();
//$name = $_SESSION['user']  ;

if(!isset($_SESSION['loggedin'])){

   header('Location:marketlogin.php');
}
$items = $price = '';
	$errors = array( 'items' => '', 'price' => '');








if (isset($_POST['submit'])) {
  //check items
  if(empty($_POST['items'])){
			$errors['items'] = 'An item is required';
		} else{
			$items = $_POST['items'];
			if(!preg_match('/^[a-zA-Z\s]/', $items)){
				$errors['items'] = ' Items must be letters only';
			}
		}	
		if(empty($_POST['price'])){
			$errors['price'] = 'A price is required';
		}
		if (array_filter($errors)) {
  
}else {
  
  
  
  
  
  
  
  $items = $_POST['items'];
  $price = $_POST['price'];
  $sqlcreate = "INSERT INTO `marketitems` (`items`, `price`) VALUES ('$items', '$price')";
  $query = mysqli_query($conn,$sqlcreate);
  
}
}



//$id = mysqli_real_escape_string($conn,$_GET['id']);



//$sql = "SELECT items, price FROM `marketitems` WHERE `id` = $id" ;
//$query =mysqli_query($con,$sql);
//$row = mysqli_fetch_assoc($query);



$sql="SELECT * FROM `marketitems` ";


$query1 = mysqli_query($conn,$sql);




/*$user = $_SESSION['loggedin'];

$sql3 ="SELECT id FROM `marketuser` WHERE (`name`='$user') ";*/










?>







<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
        <link rel="stylesheet" href="market.css" type="text/css" media="all" />
    <title></title>
  </head>
  <body>
        <nav> <span> Market  </span>     <a href="logout.php"> Logout </a>   </nav>
   
       <div class="container">
   
    <h1> Welcome to Market </h1>
  <b style="font-size:900; align-items: center;">  <?php

echo $name;


?></b>
   <form method="post">
      
      
                <?php
        while ($row1 = mysqli_fetch_assoc($query1)) {

  ?>  
     <div class="product">
       
       
       <div class="items">
         <h6>Products</h6>
         <p><?php echo $row1['items'];?></p>
       </div>
       
          <div class="price">
         <h6>Prices <span> &#8358</span></h6>
         <p><?php echo '<span> &#8358</span> ' . $row1['price'];?></p>
       </div>
       
       <a href="edit.php?id=<?php echo $row1['id'] ?>">Edit</a>
       <a href="delete.php?id=<?php echo $row1['id'] ?>">Delete</a>
     </div>
     
       <?php } ?>
     
     
     
     
     








  <span>Items </span> <br/>  <input type="text" name="items" value="<?php echo htmlspecialchars ($items)?>" />
          <div class="red-text"><?php echo $errors['items']; ?></div>
          
          
          
     <span>   Price </span> <br/>   <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars ($price)?>" />
                <div class="red-text"><?php echo $errors['price']; ?></div>
            <button type="submit" name="submit">Add</button>
    
    
 
     </form>




<br/>

</div>

  </body>
</html>
