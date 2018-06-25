<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="HomeStyle.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <title>ICR Login</title>
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
            <h3 style="text-align: center; font-family: 'Lobster', cursive; font-size: 24px">Log in below</h3>
            <div class="reg-content">
                <?php
                    if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    $conn = new PDO("mysql:host=localhost; dbname=onlineshop; charset=utf8","root","");
                    $query = "Select Email, Password From customers";
                    $result = $conn->query($query);
                    $find = FALSE;
                    
                    while ($row = $result->fetch()) {
                        if (($email == $row['Email']) and ($password == $row['Password'])) {
                            $find = TRUE;
                        }
                    }
                    if ($find == TRUE) {
                        header("location:customerHome.php?param=$email");
                    }
                    else {
                ?>
                <form method="POST" action="login.php">
                    <input type="email" name="email" placeholder="Email" required class="reg-input"><br>
                    <input type="password" name="password" placeholder="Password" required class="reg-input">
                    <input type="checkbox" checked="checked" name="remember" class="remember-me"> Remember me
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                      <button type="submit" class="btn-lrg signup-btn">Sign Up</button>
                      <button type="button" class="btn-lrg cancel-btn">Cancel</button>
                    </div>        
                            
                </form>
                
                <?php
                   }
                }
                else {
                    ?>
                    <form method="POST" action="login.php">
                        <input type="email" name="email" placeholder="Email" required="" class="reg-input"><br/>
                        <input type="password" name="password" placeholder="Password" required="" class="reg-input">
                        <input type="checkbox" checked="checked" name="remember" class="remember-me"> Remember me
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                          <button type="submit" class="btn-lrg signup-btn">Log in</button>
                        </div>   
                    </form>
                    <?php
                }
            ?>
            </div>
            <footer class="footer">
                <div class="footer-text">
                    <p style="font-size: 16px">
                        © 2017 ICR.co.za  |  All Rights Reserved  |  Privacy Policy 
                    </p>
                    <p style="font-size: 12px;">
                        Created By © 2018 Christiano Saayman
                    </p>
                </div>
                <a href="index.php"><img src="img/ICR_logo.png" alt="logo" style="width: 160px; height: 120px; float: right" class="logo"></a>
            </footer>
        </div>
        <script type="text/javascript">
            $('#submit').click(function() {
                var pword = $('#pass').val();
                var conword = $('#conpass').val();
                
                if (pword !== conword){
                    alert("Passwords do no match.");
                    return false;
                }
            });
        </script>
    </body>
</html>
