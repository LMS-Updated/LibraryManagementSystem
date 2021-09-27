<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-------------------------------------------Bootstrap link----------------------------------------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!------------------------------------------External Stylesheet-------------------------------------------------------------------------------->
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/style.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
    <title>LearnZilla</title>
</head>

<body>
<!--------------------------------------------------Navbar------------------------------------------------------------------------>
<div>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
            <div class="container">
                <a class="navbar-brand " href="index.php"><span class="nav-logo"> LearnZILLA</span> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">TEAM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<!---------------------------------------------Sign in box -------------------------------------------------------------------------------------------->      
        <div class="page-container">
           
            <img src="../Images/user-signin-page-image2.png" alt="user-signin image" width="100%" height="100%" style="margin-left:100px;">
            <form action="validation.php" method="post" class="signin-signup-form-container user-signin-form-container">
                <div class="signin-signup-form user-signin-form">
                    <h2 class="user_sigin_heading">Welcome Back User!</h2>
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email" placeholder="Enter your Email">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Enter Your Password">
                    <button class="btn btn-lg user-signin-form-btn" name="login" type="submit"> Login</button>
                    <span class="user-signin-span"><a  href="user_signup.php"> New User? Sign Up</a></span>
                    <span class="user-signin-span"><a  href="">Forgot Password?</a></span>
                </div>
            </form>  
        </div>

    </div>
 <!---------------------------------------------------------FOOTER---------------------------------------------------------------------------------------------->
 <div class="footer" style="border-top:2px solid black;margin-top:80px;" >
        <div class="container">
            <div class="row justiy-content-center">
                <!-----------------------column 1-------------------->
                <div class=" col-sm-2 col-md-4">
                    <p class="footer-heading" >LearnZILLA</p>
                    <span class="footer-content">Place where you can learn and grow. </span>
                </div>
                <!----------------------column 2 --------------------->
                <div class=" col-sm-12 col-md-4">
                    <p class="footer-heading" >FOLLOW US</p>
                    <i class="fab fa-facebook-f icon"></i>
                    <i class="fab fa-github icon"></i>
                    <i class="fab fa-instagram icon"></i>
                    <i class="fab fa-linkedin icon"></i>

                </div>
                <!-----------------colum 3---------------------->
                <div class=" col-sm-12 col-md-4">
                    <p class="footer-heading" >CONTACT US</p>
                    <p class="footer-contact">+123&nbsp; 456 &nbsp;789</p>
                    <p class="footer-contact">LearnZilla@gmail.com</p>
                    <p class="footer-contact">enquiry@learnZilla.com</p>
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>