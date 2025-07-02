<?php
        session_start();
        ?> 


<!--Register As a Page-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonorWeb</title>
    <link rel="stylesheet" href="css/register.css">
    
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Register as a</h1>
            <a href="./register donor.php">
            <button type="button" class="btn">Donor</button></a>
            <a href="./register hospital.php">
            <button type="button" class="btn">Hospital / Health Care Professional</button></a>
            <a href="./register bank.php">
            <button type="button" class="btn">Blood Bank</button></a>
            <a href="./register volunteer.php">
            <button type="button" class="btn">Volunteer</button></a>
            <a href="home.php" class="text">Back to Home</a>
        </form>
    </div>
</body>