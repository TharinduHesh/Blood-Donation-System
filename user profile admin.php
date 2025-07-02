<!--profile-->

<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id']; //get admin id from session

if(!isset($user_id)){
   header('location:login admin.php'); //if admin not logged in auto redirect to login page
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/user profile.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `admin` WHERE admin_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select); //get admin details from database
         }
         
      ?>
      <h3><?php echo $fetch['name']; ?></h3> <!--show username of the admin-->
      <a href="update_profile admin.php" class="btn">Update profile</a>
      
      <p><a href="AdminPage.php">Back to Home</a></p>
      
   </div>

</div>

</body>
</html>