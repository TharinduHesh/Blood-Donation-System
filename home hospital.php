<!--session started in header file-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonorWeb</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js"></script>
</head>
<body>
    <?php include "./header hospital.php" ?>
    
    <div class="slideshow">
        <div class="mySlides fade">
            <a href="./news.php">
                <div class="text">Whats New!</div>
            </a>
            <div class="text2">The Gift of Blood is<br>The Gift of Life</div>
                <img src="images/slide 1.jpg" style="width: 100%; height: 500px; object-fit: cover;">
        </div>
        <div class="mySlides fade">
            <a href="./news.php">
                <div class="text">Whats New!</div>
            </a>
            <div class="text2">The Gift of Blood is<br>The Gift of Life</div>
                <img src="images/slide 2.jpg" style="width: 100%; height: 500px; object-fit: cover;">
        </div>
        <div class="mySlides fade">
            <a href="./news.php">
                <div class="text">Whats New!</div>
            </a>
            <div class="text2">The Gift of Blood is<br>The Gift of Life</div>
                <img src="images/slide 3.jpg" style="width: 100%; height: 500px; object-fit: cover;">
        </div>
        <div class="mySlides fade">
            <a href="./news.php">
                <div class="text">Whats New!</div>
            </a>
            <div class="text2">The Gift of Blood is<br>The Gift of Life</div>
                <img src="images/slide 4.jpg" style="width: 100%; height: 500px; object-fit: cover;">
        </div>


        <!-- The dots/circles -->
        <div class="beacons" style="text-align:center">
            <span id="d-one" class="dot" onclick="currentSlide(1)"></span>
            <span id="d-two" class="dot" onclick="currentSlide(2)"></span>
            <span id="d-three" class="dot" onclick="currentSlide(3)"></span>
            <span id="d-four" class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    <div class="imgcontainer">
        <p>
            <h2>Who We Are!</h2>
            <img src="images/image 18.jpg"><p class="we">We hope to maintain the convenient national blood collection for patients and hospital staff through this website, which is developed with the aim of creating a healthy Sri Lankan society. Also, new donors and sponsors will be connected for the national blood collection.<br><a href="about us.php"><span class="span">More Info</span></a></p>
        </p>
    </div>
    <div class="textcontain">
        <div class="one">
            <img src="images/image 1.jpg">
            <h2>About Blood</h2>
            <p>The ABO blood group system was discovered by Karl Landsteiner in 1900. 46 years later (1946) the Blood Transfusion Service was formed. In 1996 the National Blood Service was formed to collect and provide blood supplies for all the hospitals in Sri Lanka.</p>
        </div>
        <div class="two"><img src="images/image 7.jpg">
            <h2>Components of Blood</h2>
            <p>When we receive your donation we <br>separate it into individual components by spinning it in a machine called a centrifuge. The individual components are red cells, white cells, platelets and plasma. These can all be put to different uses.<br><br></p>
        </div>
        <div class="three"><img src="images/image 5.jpg">
            <h2>How does the Body Replace Blood</h2>
            <p>During a whole blood donation we aim to take just under a pint (about 470mls) of blood, which works out at no more than 13 per cent of your blood volume. After donation, your body has an amazing capacity to replace all the cells and fluids that have been lost.</p>
        </div>
    </div>

    <br>
    <?php include "./footer.php" ?>
</body>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    
    showSlides();
    autoshowSlides();
    
    function autoshowSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(autoshowSlides, 5000); // Change image every 5 seconds
    }
    </script>

    
</html>