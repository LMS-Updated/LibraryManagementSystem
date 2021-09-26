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
    <link rel="stylesheet" href="../public/css/style.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
    <title>E-Library</title>
</head>

<body>
<!---------------------------------------------Navbar------------------------------------------------------------------------------------------------>
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="logo">E-Library</h1>
        </nav>

<!---------------------------------------------Sign in box -------------------------------------------------------------------------------------------->      
        <div class="admin-signin-container">
           
            <img src="../Images/admin-login-page.jpg" alt="admin-page-image" width="100%" height="100%">
            <div class="signin-signup-form-container admin-signin-form-container">
                <form action="validation.php" method="post" class="signin-signup-form">
                    <h2 class="heading">Welcome Admin!</h2>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" placeholder="Enter your Email">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter Your Password">
                    <button class="btn btn-lg admin-login-btn" type="submit"> Login</button>
                </form>
            </div>

           
    </div>

   


 
<!-----------------------------------------------Footer---------------------------------------------------------------------------------------------------->
    
    <footer class="footer">
        <span>Copyrights @ Team</span>
    </footer>
</body>

</html>