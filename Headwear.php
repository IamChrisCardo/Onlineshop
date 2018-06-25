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
        <div id="slides">
            <div class="section">
                
            </div>
                <div class="section1">
                     <h1 style="text-align: center; color: brown">HEADWEAR</h1>
                     <table>
                        <td>
                            <figure>
                                <a href="9fifty.php" style="top: 15px;left: 15px;"><img src="img/9fifty1.jpg" width="320" height="410" alt="Pic 2" class="left" /></a>
                            <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">New Era NY 9fifty Snapback R599.95</figcaption>
                            </figure>
                            </td>
                        <td>
                            <figure>
                                <a href="Beanie.php" style="top: 15px;left: 15px;"><img src="img/beanie1.jpg" width="320" height="410" alt="Pic 2" class="left" />
                                </a>
                                <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">
                                    Obey Beanie R399.95
                                </figcaption>
                            </figure>
                        </td>
                        <td>
                            <figure>
                                <a href="GStar.php" style="top: 15px;left: 15px;"><img src="img/gstar1.jpg" width="320" height="410" alt="Pic 2" class="left" /></a>
                            <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">
                                G-Star Raw Snapback R699.95
                            </figcaption>
                            </figure>
                        </td>
                    </table>
                    <table>
                        <td>
                            <figure>
                                <a href="PumaSnap.php" style="top: 15px;left: 15px;"><img src="img/puma1.jpg" width="320" height="410" alt="Pic 2" class="left" /></a>
                            <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">Puma Snapback R899.95</figcaption>
                            </figure>
                        </td>
                        <td>
                            <figure>
                                <a href="trucker.php" style="top: 15px;left: 15px;"><img src="img/trucker1.jpg" width="320" height="410" alt="Pic 2" class="left" /></a>
                            <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">New Era NY Trucker R599.95</figcaption>
                            </figure>
                        </td>
                        <td>
                            <figure>
                                <a href="Wallace.php" style="top: 15px;left: 15px;"><img src="img/wallace1.jpg" width="320" height="410" alt="Pic 2" class="left" /></a>
                                <figcaption style="position: absolute;color: white;font-weight: bold;color: black;font-size: 14px">Globe Wallace 5 Panel R299.95</figcaption>
                            </figure>
                        </td>
                    </table>
                </div>
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
