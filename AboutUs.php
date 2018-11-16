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
	                 <h1 style="text-align: center; color: brown">About Us</h1>
				    	<div class="row">
						  <div class="column">
						    <div class="card">
						      <img src="img/christiano.jpg" alt="Christiano" style="width:100%">
						      <div class="container">
						        <h2>Christiano Saayman</h2>
						        <p class="title">CEO &amp; Founder</p>
						        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						        <p>example@example.com</p>
						      </div>
						    </div>
						  </div>

						  <div class="column">
						    <div class="card">
						      <img src="img/christiano.jpg" alt="Christiano" style="width:100%">
						      <div class="container">
						        <h2>Christiano Saayman</h2>
						        <p class="title">Art Director</p>
						        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						        <p>example@example.com</p>
						      </div>
						    </div>
						  </div>

						  <div class="column">
						    <div class="card">
						      <img src="img/christiano.jpg" alt="Christiano" style="width:100%">
						      <div class="container">
						        <h2>Christiano Saayman</h2>
						        <p class="title">Designer</p>
						        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						        <p>example@example.com</p>
						      </div>
						    </div>
						  </div>
						</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
						<h1 style="color: brown">contact us</h1>
				</div>
				<div class="row">
						<h4 style="text-align:center">We'd love to hear from you!</h4>
				</div>
				<div class="row input-container">
						<div class="col-xs-12">
							<div class="styled-input wide">
								<input type="text" required />
								<label>Name</label> 
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="styled-input">
								<input type="text" required />
								<label>Email</label> 
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="styled-input" style="float:right;">
								<input type="text" required />
								<label>Phone Number</label> 
							</div>
						</div>
						<div class="col-xs-12">
							<div class="styled-input wide">
								<textarea required></textarea>
								<label>Message</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="btn-lrg submit-btn">Send Message</div>
						</div>
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
</script>
    </body>
</html>