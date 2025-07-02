<!--session started in header file-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fund donate.css">
    <script src=".js/donation.js"></script>
</head>
<body>
    <?php include "./header volunteer.php" ?>
    <br>
    
        <!--Payment detail section-->
        <div class="maindiv">
            <!--Adding personal details-->
            <form method="post" action="fund donate.php">
            <div class="subdiv" id="personaldetails">
                
                    <h2>Your Details</h2>

                    <br><br>    

                    <label for="name"><b>Name</b></label>
                    <input type="text" class="name" name="name" required />

                    <br><br>

                    <label for="phone"><b>Phone</b></label>
                    <input type="number" value="phone" class="phone" name="con" required />

                    <br><br>

                    <label for="email"><b>Email</b></label>
                    <input type="email" class="email" name="email" required />

                    <br><br>

                    <label for="msg"><b>Say Something if you want</b></label>
                    <input type="msg" class="msg" name="msg">

                    <br><br>
            
            </div>
            <!--Adding payment details-->
            <div class="subdiv" id="payment_details">
            
                <h2>Payment Details</h2>

                <br><br>

                <label><b>Choose Payment Method</b></label>

                <br><br>

                <label for="">Visa</label>
                <input type="radio" name="type" required />
                <label for="">Mastercard</label>
                <input type="radio" name="type" required />
                <label for="">Amex</label>
                <input type="radio" name="type" required />
                <label for="">Paypal</label>
                <input type="radio" name="type" required />
                
                <br><br>

                <label for="cardno"><b>Card Number</b></label>
                <br><br>
                <input type="number" name="cardno" class="num1" required /> 

                <br><br>

                <label for="cvvno"><b>CVV Number</b></label>
                <br><br>
                <input type="number" name="cvvno" class="num2" required />

                <br><br>

                <label for="amount"><b>Amount</b></label>
                <br><br>
                <input type="number" name="amount" class="num3" required />

                <br><br>
                <input type="reset" class="reset_btn">
                <button type="submit" class="submit_btn" id="submit_btn" name="submit_btn" >Submit</button>
                
                </form>
            </div>
            </form>
            <!--Payment status section-->
            

            
 
        </div>
        
        <br>
        <?php
            require 'config.php';

            if (isset($_POST["submit_btn"])){

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $co = $_POST['con'];
                    $msg = $_POST['msg'];
                    $amount = $_POST['amount'];
                    


                    $sql = "INSERT INTO donations VALUES ('$name','$co','$email','$msg','$amount','')";
                    

                    if($conn->query($sql)){

                        /* Donation Send Successfully message */
                        echo "<script>alert('You have successfully send a Donation.! Thank you for supporting us!');</script>";
                    } else {
                        echo "<script>alert('Something went wrong. Please try again!');</script>";
                    }
            }
?>
    
</body>
</html>