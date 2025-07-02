<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id']; //get user id from session

if(isset($_POST['update_profile'])){
//assign variables
   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
//update details
   mysqli_query($conn, "UPDATE `volunteer` SET name = '$update_name', email = '$update_email' WHERE v_id = '$user_id'") or die('query failed');
//assign variables
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
   $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
   $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `volunteer` SET pw = '$confirm_pass' WHERE v_id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   } //chech password matching

  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/update profile.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `volunteer` WHERE v_id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
        
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            
            
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['pw']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="Update profile" name="update_profile" class="btn">
      <a href="user profile volunteer.php" class="delete-btn">Go back</a>
   </form>

</div>

</body>
</html>