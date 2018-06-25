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
                <a href="index.php">
                    <img src="img/ICR_logo.png" alt="logo" style="width: 160px; height: 120px" class="logo">
                </a>
            <div class="reg-div">
                <a href="registration.php" class="search-link">
                    Register
                </a> or 
                <a href="login.php" class="search-link">
                    Log in
                </a><br>
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

            <div class="slideshow-container-index">

                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="img/sale-sign.jpg" style="width:1000px">
                  <div class="text">Sales Banner</div>
                </div>
                                
                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="img/watches.png" style="width:1000px">
                  <div class="text">Watches Banner</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="img/shoes-adidas.jpg" style="width:1000px">
                  <div class="text">Shoes Banner</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext"></div>
                  <img src="img/hatwear.png" style="width:1000px">
                  <div class="text">HeadWear Banner</div>
                </div>

            </div>
            <div id="header2">
            
                   
                <div class="banner4"><p style="text-align: center; font-size: 20px;">FREE SHIPPING FOR ANY PURCHASE OVER R1000 *RSA ONLY</p></div>
                <div class="banner5"><p style="font-size: 20px; text-align: center; color: #ff0000;">END OF SEASON SALE</p></div>
                <div class="banner6"><p style="font-size: 14px; text-align: center;"><a href="index.php">BACK TO TOP</a></p></div>
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
                <a href="index.php"><img src="img/ICR_logo.png" alt="logo" style="width: 160px; height: 120px; float: right" class="logo"></a>
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
</script>
    </body>
</html>