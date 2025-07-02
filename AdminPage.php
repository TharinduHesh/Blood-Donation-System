

<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id']; //get admin id from session

if(!isset($user_id)){
   header('location:login admin.php'); //if admin not logged in auto redirect to login page
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AdminPage.css">
    <title>Administrator</title>
</head>

<body class="body">
    <div class="main">
        <div class="div1">  <!-- no.1 -->
            <div class="div1-1"><!-- 1.1 -->
                <div class="div1-2">
                    
                    <div class="h2">
                        <?php
                            $select = mysqli_query($conn, "SELECT * FROM `admin` WHERE admin_id = '$user_id'") or die('query failed');
                            if(mysqli_num_rows($select) > 0){
                                $fetch = mysqli_fetch_assoc($select);
                            }
                            
                        ?>
                        <h3><?php echo $fetch['name']; ?></h3>
                       
                        
                    </div>
                    <a href="login admin.php">
                    <button class="LogBtn">Logout</button></a>
                </div><!-- 1.2 -->
                
                <div class="div1-4">
                    <a href="user profile admin.php">
                    <button class="EDITBtn">Edit Account</button></a>
                    
                </div><!-- 1.4 -->
            </div>
        </div>
        <div class="div2"> <!-- no.2 --> 
            <div class="div2-1">
                <h2 class="h2">Administrator</h2>
                
            </div><!-- 2.0 -->
            <div class="div2-2"><!-- 2.1 -->
                <div class="div2-2-1">
                    <p class="p1">News</p>
                    <table class = "table">
                    <tr>
                        <th scope="col">News ID</th>
                        <th scope="col">News Content</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `news`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['news_id'];
                        $news = $row['news'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$news.'</td>
                        
                        <td>
                        <a href="delete news.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                    <a href="add news.php">
                    <button class="ADDBtn" >Add News</button></a>
                    
                </div><!-- 2.1.1 -->
                <div class="div2-2-2">
                    <p class="p1">Events</p>
                    
                    <table class = "table">
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Time</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `events`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['event_id'];
                        $name = $row['name'];
                        $date = $row['date'];
                        $loc = $row['loc'];
                        $time = $row['time'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>'.$loc.'</td>
                        <td>'.$time.'</td>
                        
                        <td>
                        <a href="delete events.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                    <a href="add events.php">
                    <button class="ADDBtn" >Add Event</button></a>
                </div><!-- 2.1.2 -->
            </div>
            <div class="div2-3"><!-- 2.2 -->
                <div class="div2-3-1">
                    <p>Donor Accounts</p>
                </div>
                <div class="div2-3-2">
                  
                 
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">Donor ID</th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Age</th>
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `donor`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['d_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['contactNo'];
                        $btype = $row['bloodType'];
                        $age = $row['age'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$btype.'</td>
                        <td>'.$age.'</td>
                        <td>
                        <a href="delete donor.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
               
            </div>

            <div class="div2-3"><!-- 2.2 -->
                <div class="div2-3-1">
                    <p>Health Care Professional Accounts</p>
                </div>
                <div class="div2-3-2">
                  
                 
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">HCP ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Profession</th>
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `hospital`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['hcp_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['contactNo'];
                        $hname = $row['hospital_name'];
                        $pro = $row['profession'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$hname.'</td>
                        <td>'.$pro.'</td>
                        <td>
                        <a href="delete hospital.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
        
            </div>

            <div class="div2-3"><!-- 2.2 -->
                <div class="div2-3-1">
                    <p>Blood Bank Accounts</p>
                </div>
                <div class="div2-3-2">
                  
                 
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">HCP ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Address</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `bank`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['b_bank_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['contactNo'];
                        $address = $row['Address'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$address.'</td>
                       
                        <td>
                        <a href="delete bank.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
        
            </div>

            <div class="div2-3"><!-- 2.2 -->
                <div class="div2-3-1">
                    <p>Volunteer Accounts</p>
                </div>
                <div class="div2-3-2">
                  
                 
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">V ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Address</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `volunteer`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['v_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['contactNo'];
                        $address = $row['address'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$address.'</td>
                       
                        <td>
                        <a href="delete volunteer.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
        
            </div>

            <div class="div2-4"><!-- 2.3 -->
                <div class="div2-3-1">
                    <p>Requests by Hospitals</p>
                </div>
                <div class="div2-3-2">
                    <div class="div2-3-2-1"></div>
                    
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">Request ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Message</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `request_hos`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['req_id'];
                        $name = $row['name'];
                        $date = $row['date'];
                        $phone = $row['phone'];
                        $msg = $row['message'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$msg.'</td>
                       
                        <td>
                        <a href="delete req hos.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
                
            </div>

            <div class="div2-4"><!-- 2.3 -->
                <div class="div2-3-1">
                    <p>Requests by Blood Banks</p>
                </div>
                <div class="div2-3-2">
                    <div class="div2-3-2-1"></div>
                    
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">Request ID</th>
                        <th scope="col">Blood Banks Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Message</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `request_bank`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['req_id'];
                        $name = $row['name'];
                        $date = $row['date'];
                        $phone = $row['phone'];
                        $msg = $row['message'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$msg.'</td>
                       
                        <td>
                        <a href="delete req bank.php?deleteid='.$id.'" class="deleteBtn">Delete</a>
                        </td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
                
            </div>

            <div class="div2-4"><!-- 2.3 -->
                <div class="div2-3-1">
                    <p>Donations</p>
                </div>
                <div class="div2-3-2">
                    <div class="div2-3-2-1"></div>
                    
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">Donation ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Message</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `donations`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['donationID'];
                        $name = $row['name'];
                        $phone = $row['contactNo'];
                        $email = $row['email'];
                        $amo = $row['amount'];
                        $msg = $row['message'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$email.'</td>
                        <td>'.$amo.'</td>
                        <td>'.$msg.'</td>
                       
                        
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
                
            </div>

            <div class="div2-4"><!-- 2.3 -->
                <div class="div2-3-1">
                    <p>Comments</p>
                </div>
                <div class="div2-3-2">
                    <div class="div2-3-2-1"></div>
                    
                </div>
                <div class="div2-3-3">
                <table class = "table">
                    <tr>
                        <th scope="col">Comment ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        
                    </tr>

                    <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `comments`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['comment_id'];
                        $name = $row['name'];
                        $phone = $row['contactNo'];
                        $email = $row['email'];
                        $msg = $row['msg'];
                        
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$email.'</td>
                        <td>'.$msg.'</td>
                       
                        
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>
