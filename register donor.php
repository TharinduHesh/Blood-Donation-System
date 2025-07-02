<?php

include 'config.php';

if(isset($_POST['submit'])){
   //assign php variables
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $contact = mysqli_real_escape_string($conn, $_POST['con']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $blood = mysqli_real_escape_string($conn, $_POST['btype']);

   $select = mysqli_query($conn, "SELECT * FROM `donor` WHERE email = '$email' AND pw = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; //check user already exist
   }else{
         //insert data to table
        $insert = mysqli_query($conn, "INSERT INTO `donor` VALUES('','$name', '$email', '$contact', '$blood', '$dob', '$age', '$pass')") or die('query failed');

         if($insert){
            $message[] = 'registered successfully!';
            header('location:login donor.php');
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
      <h3>Register as a Donor</h3>
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
      <input type="age" placeholder="Age" class="box" name="age">
      <input type="dob" placeholder="Date of Birth (YYYY/MM/DD)" class="box" name="dob">
      <input type="blood" placeholder="Blood Type" class="box" name="btype">
      <input type="submit" name="submit" value="register now"  class="btn">
      <p>already have an account? <a href="login donor.php">login now</a></p>
   </form>

</div>

</body>
</html>