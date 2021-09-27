
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
<!---------------------------------------------user registration box -------------------------------------------------------------------------------------------->      
        <div>
        
            <div class=" user-signup-form-container">
                <form action="register.php" method="post" class="user-signup-form">
                    <h2 style="text-align:center;">User Registration</h2>
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullname" placeholder="Enter your Full Name">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your Email">
                    <label for="mobile">Mobile No.</label>
                    <input type="text" id="mobile" name="mobile" placeholder="Enter your Mobile No">
                    <label for="password"> Password</label>
                    <input type="password" id="password"  name="password" placeholder="Enter Your Password">
                    <label for="roll_no"> Roll_no</label>
                    <input type="Number" id="roll_no" name="roll_no" placeholder="Enter Your Roll Number">
                    <label for="address"> Address</label>
                    <textarea id="address"  name="address" placeholder="Enter Your Address.." rows="5" cols="30"></textarea>
                    <button class="btn btn-lg signup-form-btn" name="signup" type="submit">SignUp</a>
                </form>
               
            </div>
           
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