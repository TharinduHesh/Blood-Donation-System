<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $loc = mysqli_real_escape_string($conn, $_POST['loc']);
   $time = mysqli_real_escape_string($conn, $_POST['time']);

   $insert = mysqli_query($conn, "INSERT INTO `events` VALUES('','$name','$date','$loc','$time')") or die('query failed');
//insert the values to table taken from add events page
         if($insert){
            $message[] = 'news added successfully!';
            
         }else{
            $message[] = 'registeration failed!';
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
      <h3>ADD AN EVENT</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Enter Event Details" class="box" required>
      <input type="text" name="date" placeholder="Enter Event Date" class="box" required>
      <input type="text" name="loc" placeholder="Enter Event Location" class="box" required>
      <input type="text" name="time" placeholder="Enter Event Time" class="box" required>
      
      
      
      <input type="submit" name="submit" value="Add Event"  class="btn">
      <p><a href="AdminPage.php">Go Back</a></p>
   </form>

</div>

</body>
</html>