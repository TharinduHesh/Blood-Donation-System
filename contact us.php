<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DonorWeb</title>
        <script src="js/home.js"></script>

        <link rel="stylesheet" href="css/contact us.css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        
    <?php include "./header.php" ?><br>

        <div class="main">
            <h1>Contact Us</h1>
            <div class="maindiv">
                <div class="div2">
                    <i class='fas fa-map-marker-alt' style='font-size:24px'></i>
                    <b>Location:</b><br>
                    <p>No.122/C,<br />Kandy Road,<br />Colombo.</p>
                </div>

                <div class="div2">
                    <i class='fas fa-phone-square-alt' style='font-size:24px'></i>
                    <b>Telephone:</b><br>
                    <p>+94754567890<br />+94784123489</p>
                </div>

                <div class="div2">
                    <i class='fas fa-envelope-square' style='font-size:24px'></i>
                    <b>E-mail:</b><br>
                    <a id="gmail" href="https://mail.google.com/mail/" target="_blank">
                    Donorweb@gmail.com</a>
                </div>
            </div>
        </div>

        <div class="div3">
            <div class="div4">
                <aside class="a">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047271.2999762455!2d78.46169489521603!3d7.851731513542368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1652730033179!5m2!1sen!2slk"
                    width="350" height="375" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </aside>
            </div>
        
            <div class="div4">
                <h3>Medical Officers in Charge:</h3>
                <div class="div2main">

                    <div class="div5">
                        <img src="images/doctor1.jpg" alt="doctor" width="150" height="150">
                    </div>

                    <div class="div5">
                    <p>Name        :Dr.Shehan Pathirana<br>
                       Telephone   :+9465712865<br>
                       Email       :<a id="gmail" href="https://mail.google.com/mail/" target="_blank">DrShehanPath@gmail.com</a><br></p>
                    </div>
                </div>
                <br>
                <div class="div3main">
                    <div class="div6">
                        <img src="images/doctor2.jpg" alt="doctor" width="150" height="150">
                    </div>
                    <div class="div6">
                    <p> Name       : Dr.Lakshika Perera <br>
                        Telephone  : +9465712842<br>
                        Email      :<a id="gmail" href="https://mail.google.com/mail/" target="_blank">DrLakshiPerera@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_row">
        <div class="div22"> <!--sub div 2-->
            <div class="div44"> 
           
                <form method="post" action="">
                <p class="text1">Get in Touch with Us!</p><br>
                
                  
                    <center><input type="text" name="name" class="input" placeholder="Name">
                        
                    </center><br><br>

                    <center><input type="text" name="phone" class="input" placeholder="Contact No">
                        
                    </center><br><br>

                    <center><input type="text" name="email" class="input" placeholder="Email">
                        
                    </center><br><br>
                    
                    
                    <center><input type="textarea" class="input-1" placeholder="Comments" name="msg"><br><br>
                    <button class="btn" class="submit_btn" id="submit_btn" name="submit_btn">Submit</button></center>
                
                </form>
            
            </div>
            </div>
        </div>

        <?php
            require 'config.php';

            if (isset($_POST["submit_btn"])){

                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $msg = $_POST['msg'];
                    
                    


                    $sql = "INSERT INTO comments VALUES ('','$name','$phone','$email','$msg')";
                    

                    if($conn->query($sql)){

                        /* Request Send Successfully message */
                        echo "<script>alert('Succesful!');</script>";
                    } else {
                        echo "<script>alert('Something went wrong. Please try again!');</script>";
                    }
            }
?>

        <br>
        <?php include "./footer.php" ?>
        
    </body>
    
</html>