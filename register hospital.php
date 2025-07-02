<?php

include 'config.php';

if(isset($_POST['submit'])){
   //assign php variables
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $contact = mysqli_real_escape_string($conn, $_POST['con']);
   $pro = mysqli_real_escape_string($conn, $_POST['pro']);
   $hid = mysqli_real_escape_string($conn, $_POST['hid']);
   $hname = mysqli_real_escape_string($conn, $_POST['hname']);

   $select = mysqli_query($conn, "SELECT * FROM `hospital` WHERE email = '$email' AND pw = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; //check user already exist
   }else{
    //insert data to table
         $insert = mysqli_query($conn, "INSERT INTO `hospital` VALUES('','$name', '$email', '$contact', '$pro', '$hid', '$hname', '$pass')") or die('query failed');

         if($insert){
            $message[] = 'registered successfully!';
            header('location:login hospital.php');
         }else{
            $message[] = 'registeration failed!';
         }
      
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sign up.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" >
      <h3>Register as a Hospital</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="contact" placeholder="Contact Number" class="box" name="con">
      <input type="pro" placeholder="Profession" class="box" name="pro">
      <input type="hid" placeholder="Hospital ID" class="box" name="hid">
      <input type="hname" placeholder="Hospital Name" class="box" name="hname">
      <input type="submit" name="submit" value="register now"  class="btn">
      <p>already have an account? <a href="login hospital.php">login now</a></p>
   </form>

</div>

</body>
</html>