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
<!----------------------------------------------Red and Black Circles for decorative purpose---------------------------------------------------------------------------->
        <div class="red-circle circle"> </div>
        <div class="black-circle circle"> </div>

<!---------------------------------------------Sign in box -------------------------------------------------------------------------------------------->      
        <div class="page-container">
            <img src="Images/starting-page-image.webp" alt="starting image" width="900" height="500">
            <div class="index-main-block">
                <h1>Embrace The Books!</h1>
                <div class="quote-block">
                    <p><em>Knowledge is free at library, Just bring your own container.</em></p>
                </div>
                <form action="user_signin.php" style="display:inline-block;">
                <button class="btn btn-lg index-page-btn"> User Login</button>
                </form>
               <form action="admin_signin.php " style="display:inline-block;">
               <button class="btn btn-lg index-page-btn"> Admin Login</button>
               </form>
                
            </div>
        </div>
    </div>

<!-------------------------------------------------About Us------------------------------------------------------------------------------>

<!--------------------------------------------------Contact Us------------------------------------------------------------------------------------->

<!-----------------------------------------------Footer---------------------------------------------------------------------------------------------------->
    
    <footer class="footer">
        <span>Copyrights @Team</span>
    </footer>
</body>

</html>