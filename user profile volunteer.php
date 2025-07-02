<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id']; //get user id from session

if(!isset($user_id)){
   header('location:login volunteer.php'); //if user not logged in auto redirect to login page
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login volunteer.php');
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
         $select = mysqli_query($conn, "SELECT * FROM `volunteer` WHERE v_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select); //get user details from database
         }
         
      ?>
      <h3><?php echo $fetch['name']; ?></h3> <!--show username of the user-->
      <a href="update_profile volunteer.php" class="btn">Update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p><a href="home volunteer.php">Back to Home</a></p>
      <p>New <a href="login volunteer.php">login</a> or <a href="register volunteer.php">Register</a></p>
   </div>

</div>

</body>
</html>