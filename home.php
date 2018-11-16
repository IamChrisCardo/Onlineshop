<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="HomeStyle.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>ICR Wear</title>
    </head>
    <body>
        <div class="content">
            <header class="header">
                <a href="index.php"><img src="img/ICR_logo.png" alt="logo" style="width: 160px; height: 120px" class="logo"></a>
            <div class="reg-div">
                <a href="registration.php" class="search-link">Register</a> or <a href="login.php" class="search-link">Log in</a><br>
                <input type="text" name="search-box" placeholder="Search here" class="search-box">
                <button type="button" class="search-btn">
                    <>
                </button>
            </div>
            </header>
            <div class="topnav" id="myTopnav">
                <a href="home.php" style="width: 20%">Home</a>
                <a href="Headwear.php" style="width: 20%">Headwear</a>
                <a href="Shoes.php" style="width: 20%">Shoes</a>
                <a href="Watches.php" style="width: 20%">Watches</a>
                <a href="AboutUs.php" style="width: 20%">About Us</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <h4 style="text-align: center; font-family: 'Lobster', cursive; font-size: 28px">The Home of Mens' Fashion Accessories</h4>

            <div class="same-day">
                
            </div>
            
            <div class="banner">
                
            <span class="loud-light">WE ARE</span>
            <h1 class="loud-light landing-intro-title">Idi Chris Ricky</h1>
            <p class="landing-intro-blurb">Shop the freshest fashion from<br> 500+ of the world's best brands. Always open, always new.</p>

            </div>
            <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/watches1.jpg" style="width:100%">
              <div class="text">Watches</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/Shoes.jpg" style="width:100%">
              <div class="text">Shoes</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/headwear.jpg" style="width:100%">
              <div class="text">HeadWear</div>
            </div>

            </div>

            <br>

            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>

         <footer class="footer">
            <div class="footer-text">
                <p style="font-size: 16px">
                    © 2018 ICR.co.za  |  All Rights Reserved  |  Privacy Policy 
                </p>
                <p style="font-size: 14px">
                    Thank you for visiting SA's leading MEN's fashion boutique. We're based in Cape Town, but that doesn't stop us from delivering nationally.
                </p>
                <a href="AboutUs.php" class="info">
                    <p>About Us / Contact Us</p>
                </a>
                <p style="font-size: 12px;">
                    Created By © 2018 Christiano Saayman
                </p>
            </div>
            <a href="index.php">
                <img src="img/ICR_logo.png" alt="logo" style="width: 160px; height: 120px; float: right" class="logo">
            </a>
        </footer>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex> slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>

