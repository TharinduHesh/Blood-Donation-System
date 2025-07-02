<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id']; //get user id from session

if(!isset($user_id)){
   header('location:login bank.php'); //if user not logged in auto redirect to login page
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login bank.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonorWeb</title>
    <link rel="stylesheet" href="css/header bank.css">
    <script src="js/home.js"></script>
</head>
<body>
    <section>
        <div class="log-main">
    </section>
    <header>
        <div class="head-container">
            <div class="head-sector">
                <div class="logo">
                    <img src="images/logo 1 small.jpg">
                </div>
                
            </div>
            <div class="navigation">
                <ul>
                    <a href="./home bank.php">
                        <li><div class="logger">Home</div></li>
                    </a>
                    <a href="./LatestReq.php">
                        <li><div class="logger">Blood Requests</div></li>
                    </a>
                    <a href="news bank.php">
                        <li><div class="logger">News & Events</div></li>
                    </a>
                    <a href="./contact us bank.php">
                        <li><div class="logger">Contact Us</div></li>
                    </a>
                    <a href="./about us bank.php">
                        <li><div class="logger">About Us</div></li>
                    </a>
                </ul>
            </div>
            <a href="./bank profile.php">
            <div class="profile-pic">
                
                <img src="images/pro pic.png">
            </div></a>
            <div class="profile">
                <a style="text-decoration: none; color: rgb(214, 3, 3);" href="./user profile bank.php">Blood Bank<br>Profile
                
                </a>
            </div>
            <div class="logout">
                <a style="text-decoration: none; color: rgb(214, 3, 3);" href="./logout.php">Logout</a>
            </div>
        </div>
    </header>
</body>