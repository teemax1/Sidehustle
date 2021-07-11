<?php
//connect to my server
$conn = mysqli_connect('localhost','root','teemax','sidehustle');
if (!$conn) {
  echo 'Error in connection to host'. mysqli_connect_error($conn);
}

$errors= ['user'=>''];

if (isset($_POST['add'])) {
  
  $user= $_POST['user'];
  
  
  
  
  $sqladd = "INSERT INTO `todo` (`list`) VALUES ('$user')";
  $query =mysqli_query($conn, $sqladd);
  
  if ($user !==$query) {
    $user2 = mysqli_real_escape_string($conn, $_POST['user']);
  $id = mysqli_real_escape_string($conn,$_GET['id']);
  $sqledit = "UPDATE `todo` SET `list`= '$user2' WHERE (`id`='$id')";
  $queryedit =mysqli_query($conn, $sqledit);
  }else {
  $user3 = mysqli_real_escape_string($conn, $_POST['user']);
  $id1 = mysqli_real_escape_string($conn,$_GET['id']);
  $sqldelete = "DELETE `todo` SET `list`= '$user3' WHERE (`id`='$id')";
  $querydelete =mysqli_query($conn, $sqldelete);
  }
  
 
}



$sql ="SELECT list FROM `todo`";

$query1 =mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($query1);






  

  














?>







<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <body>
    <h3>To do List</h3>
    <form action="newtodo.php" method="post" accept-charset="utf-8">
      <input type="text" name="user" id="user" value="<?php  $row1 = mysqli_fetch_assoc($query1) ; echo $row1['list']; $id = mysqli_real_escape_string($conn,$_GET['id']); ?>" />
     <button type="submit" name="add">Add</button>
      <table border="0">
        <thead>
         <tr>
           
         </tr>
        </thead>
        <tbody>
          <?php

while ($row1 = mysqli_fetch_assoc($query1)) {





  ?>  <tr>
            <td> <?php echo $row1['list']; ?> </td> 
            <td> <button type="submit"><a href="#user">Edit</a></button>    </td>
               <td><button type="submit" name="delete" id="#user">Delete</button></td>
          </tr>
          <?php } ?>
        </tbody>
        
  
        
        
        
        
      </table>
      
            

      
      
      
    </form>
    
    
           
    
    
    
    
    
  </body>
</html>