<!--session started in header file-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/LatestReq.css">
    <title>Latest Request</title>
</head>
<body class="body">
<?php include "./header bank.php" ?>
    <br>
    <div class="main_row">
        <div class="div2">
            <div class="div3"> 
                <center>
                <p class="text2">Latest Request</p><br>
                <div class="B_Req">
                   
                    <table class = "table">
                    <tr>
                        <th scope="col">Request ID</th>
                        <th scope="col">Blood Bank Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                    </tr>

                    <?php

                    //show requests from request_bank table on latest request section
                    require 'config.php';
                        $sql = "SELECT * FROM `request_bank`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['req_id'];
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $date = $row['date'];
                        $msg = $row['message'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$date.'</td>
                        <td>'.$msg.'</td>
                        
                        </tr>';
                        }
                        
                    ?>

                    </table>
                </div>
                </center>
            </div>
        </div>

        <div class="div2"> 
            <div class="div4"> 
           
                <form method="post" action="LatestReq.php">
                <p class="text1">Request Blood</p> <br>
                
                  
                    <center><input type="text" name="bank" class="input" placeholder="Blood Bank Name">
                        
                    </center><br><br>
                    <center><input type="text" name="phone" class="input" placeholder="Contact Number">
                        
                    </center><br><br>
                    <!-- <label>Date and Time</label><br> -->
                    <center><input type="date" name="date" class="input" placeholder="x"></center><br><br>
                    <!-- <label>Additional Details</label><br> -->
                    <center><input type="text" class="input-1" placeholder="Additional Details" name="msg"><br><br>
                    <button class="btn" class="submit_btn" id="submit_btn" name="submit_btn">Request</button></center>
                 </center>
                
                </form>
            
            </div>
        </div>
    </div>

    <?php
            require 'config.php';
                        //send request
            if (isset($_POST["submit_btn"])){

                    $name = $_POST['bank'];
                    $phone = $_POST['phone'];
                    $date = date('y-m-d', strtotime($_POST['date']));
                    $msg = $_POST['msg'];
                    
                    


                    $sql = "INSERT INTO request_bank VALUES ('','$name','$phone','$date','$msg')";
                    

                    if($conn->query($sql)){

                        /* Request Send Successfully message */
                        echo "<script>alert('Request Succesfull!');</script>";
                    } else {
                        echo "<script>alert('Something went wrong. Please try again!');</script>";
                    }
            }
?>

    <br>
    <?php include "./footer.php" ?> 
</body>
</html>