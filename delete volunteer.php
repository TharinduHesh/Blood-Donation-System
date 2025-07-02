<?php

include 'config.php';
$id=$_GET['deleteid'];
//echo $id;
$sql = "DELETE FROM `volunteer` WHERE v_id = $id";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Succesfully Deleted!');</script>";
    header('location: AdminPage.php');
}
else {
    echo "<script>alert('Something went wrong. Please try again!');</script>";
}

?>