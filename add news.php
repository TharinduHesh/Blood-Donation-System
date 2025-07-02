<?php

include 'config.php';

if(isset($_POST['submit'])){

   $news = mysqli_real_escape_string($conn, $_POST['news']);

        $insert = mysqli_query($conn, "INSERT INTO `news` VALUES('','$news')") or die('query failed');
//insert the values to table taken from add news page
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
      <h3>ADD NEWS</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="textarea" name="news" placeholder="Enter News Details" class="box" required>
      
      
      <input type="submit" name="submit" value="Add News"  class="btn">
      <p><a href="AdminPage.php">Go Back</a></p>
   </form>

</div>

</body>
</html>