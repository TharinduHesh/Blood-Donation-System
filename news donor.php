<!--session started in header file-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/news.css">
</head>
<body>
    <?php include "./header donor.php" ?>
    <br>
    <div class="maindiv">
        <h2 class="Upcoming_events">Upcoming Events</h2>
        <br><br>
        <!--1st upcoming event-->
        <div class="subdiv">
            <div class="div1" id="content1">
                <h2>Blood Camp - Kandy</h2>
                <br><br>
                <h3>On 25th of June 2024</h3>
                <br>
                <h3>At Sahas Uyana, Kandy</h3>
                <br>
                <h3>9.30 onwards</h3>
                <br>
            </div> 

            <div class="div1"><br><br><img src="images/post 3.jpg"></div>
        </div>
        <!--2nd upcoming event-->
        <div class="subdiv">
            <div class="div1" id="content1">
                <h2>Awareness workshop - Colombo</h2>
                <br><br>
                <h3>On 5th of July 2024</h3>
                <br>
                <h3>At Royal College, Colombo</h3>
                <br>
                <h3>8.30 onwards</h3>
                <br>
            </div> 

            <div class="div1"><br><br><img src="images/post 2.jpg"></div>
        </div>

        <!--3rd upcoming event-->
        <div class="subdiv">
            <div class="div1" id="content1">
                <h2>Blood Camp - Galle</h2>
                <br><br>
                <h3>On 12th of July 2024</h3>
                <br>
                <h3>At Municipal Council Hall, Galle</h3>
                <br>
                <h3>9.00 onwards</h3>
                <br>
            </div> 

            <div class="div1"><br><br><img src="images/post 1.jpg"></div>
        </div>
        
        <!--4th upcoming event-->
    <div class="subdiv">
        <div class="div1" id="content1">
            <h2>Blood Camp - Galle</h2>
            <br><br>
            <h3>On 12th of July 2024</h3>
            <br>
            <h3>At Municipal Council Hall, Galle</h3>
            <br>
            <h3>9.00 onwards</h3>
            <br>
        </div> 

        <div class="div1"><br><br><img src="images/post 4.jpg"></div>
    </div>

    <div class="subdiv1">
        <div class="div1" id="content1">
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
                        <h3>Event Name: '.$name.'<h3>
                        <h3>Event Date: '.$date.'<h3>
                        <h3>Event Location: '.$loc.'<h3>
                        <h3>Event Time: '.$time.'<h3>
                        <br><br>
                        </tr>';
                        
                        
                        
                        }
                        
                    ?>
        </div> 

        <div class="div1"><br><br><img src="images/post 5.jpg"></div>
        
    </div>



    <br><br><br><br>
    <!--News section-->
        <div class="newsmain">
            <h2>News</h2>

            <?php
                    require 'config.php';
                        $sql = "SELECT * FROM `news`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                        $id = $row['news_id'];
                        $news = $row['news'];
                        
                        echo '<tr>
                        <h3>'.$news.'<h3>
                         
                        </tr>';
                        
                        
                        }
                        
                    ?>

            <h3>On 2023 December 23, Sports club has been organized by a<br>
                Blood Donation Camp at Gatambe Sri Rajopawanara Viharaya<br>
                from 8.30 to 4.30pm. More than 100 contributors participated for the Camp.</h3>
    
            <h3>On 2024 January 1st and 2nd, Upcountry Youth Club has<br>
                been organized by a Blood Donation Camp and Awareness workshop<br>
                at YMBA hall from 8.30 to 4.30pm.</h3>
        </div>
    <!--Past events-->
    <div class="past_events">
        <h2 class="heading">Past Events</h2>
        <div class="subdiv">
            <div class="div1" id="content1">
                <h2>Awareness workshop - Colombo</h2>
                <br><br>
                <h3>On 5th of July 2024</h3>
                <br>
                <h3>At Royal College, Colombo</h3>
                <br>
                <h3>8.30 onwards</h3>
                <br>
            </div> 

            <div class="div1"><br><br><img src="images/image 13.jpg"></div>
        </div>

        
        <div class="subdiv">
            <div class="div1" id="content1">
                <h2>Blood Camp - Galle</h2>
                <br><br>
                <h3>On 12th of July 2024</h3>
                <br>
                <h3>At Municipal Council Hall, Galle</h3>
                <br>
                <h3>9.00 onwards</h3>
                <br>
            </div> 

            <div class="div1"><br><br><img src="images/image 14.jpg"></div>
        </div>
    </div>
    </div>

    <?php include "./footer.php" ?>
</body>
</html>