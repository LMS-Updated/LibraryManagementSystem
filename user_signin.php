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
    <link rel="stylesheet" href="public/css/style.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
    <title>E-Library</title>
</head>

<body>
    <div class="container">
<!---------------------------------------------Navbar------------------------------------------------------------------------------------------------>
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="logo">E-Library</h1>
        </nav>

<!---------------------------------------------Sign in box -------------------------------------------------------------------------------------------->      
        <div class="page-container">
           
            <img src="Images/user-signin-page-image2.png" alt="user-signin image" width="100%" height="100%">
            <form action="validation.php" method="post" class="signin-signup-form-container user-signin-form-container">
                <div class="signin-signup-form user-signin-form">
                    <h2 class="heading">Welcome Back User!</h2>
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email" placeholder="Enter your Email">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Enter Your Password">
                    <button class="btn btn-lg user-signin-form-btn" name="login" type="submit"> Login</button>
                    <span class="user-signin-span"><a  href="user_signup.php"> New User? Sign Up</a></span>
                    <span class="user-signin-span"><a  href="">Forgot Password?</a></span>
                    <img src="Images/user-signin-page-image1.png" id="user-sign-in-image1" alt="signin image" width="200" height="100">
                </div>
            </form>  
    </div>

    </div>
<!-----------------------------------------------Footer---------------------------------------------------------------------------------------------------->
    
    <footer class="footer">
        <span>Copyrights @ Team</span>
    </footer>

   
</body>

</html>