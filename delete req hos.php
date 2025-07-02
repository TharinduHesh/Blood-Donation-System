<?php

include 'config.php';
$id=$_GET['deleteid'];
//echo $id;
$sql = "DELETE FROM `request_hos` WHERE req_id = $id";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Succesfully Deleted!');</script>";
    header('location: AdminPage.php');
}
else {
    echo "<script>alert('Something went wrong. Please try again!');</script>";
}

?>