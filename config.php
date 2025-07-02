<?php

$conn=new mysqli("localhost","root","","blood donation system");

if($conn->connect_error)
{
    die("failed".$conn->connect_error);
}

?>