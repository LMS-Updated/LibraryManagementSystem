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


  <style>
.form-container{
  width:450px;
  height:100%;
  margin:50px 0 0 20%;
  padding:50px;
 background-color: rgba(250,93,93,0.8);
  text-align:center;
  border-radius:50px;
}
label{
  display:block;
  text-align:left;
  margin-left:-15px;
  font-size:20px;
  font-family:sans-serif;
}
input{
  width:350px;
 padding:10px;
 margin-left:-15px;
  background-color:white;
  border:none;
  font-weight:bold;
  border-radius:10px;
}
.item{
  /* background-color:red; */
  width:300px;
  margin:20px auto;
}

.item a{
  text-decoration:none;
  margin:10px;
  padding: 10px;
  background-color:black;
  color:white;
  border:none;
  border-radius:10px;
}
.item a:hover{
  background-color:yellow;
  color:purple;
}
img{
  position:absolute;
  float:right;
  margin-left:100px;
  top:100px;
  z-index:-1;
}

.welcome_heading{
  text-align:center;
  font-family:cursive;
  font-size:60px;
  margin:80px 0;
}
h2{
  font-family:cursive;
  font-size:30px;
}

  </style>
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
              <h5>
                <a class="nav-link" href="logout.php">Logout</a>
              </h5>
          </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>

<h1 class="welcome_heading">Welcome <?php echo $_SESSION['username']; ?></h1>

<!---------------------------------------------USer-profile-page------------------->
<div class="form-container">
    <form action="" method="post">
      <img src="../Images/profile.svg" height="700" width="700" >
    <div class="item">
    <h2>Profile</h2>
    </div>
    <div class="item">
        <label for="roll_no">Roll_no</label>
        <input id="roll_no" type="text" value=<?php echo $_SESSION['roll_no'] ?> disabled>
        </div>

    <div class="item">
    <label for="name">Name</label>
        <input id="name" type="text" value=<?php echo $_SESSION['username'] ?> disabled>
    </div>
        <div class="item">
        <label for="email">Email</label>
        <input id="email" type="text" value=<?php echo $_SESSION['email'] ?> disabled>
        </div>
        
        <div class="item">
        <label for="mobile">Mobile</label>
        <input id="mobile" type="text" value=<?php echo $_SESSION['mobile'] ?> disabled>
        </div>

        <div class="item">
        <label for="address">Address</label>
        <input id="address" type="text" value=<?php echo $_SESSION['address'] ?> disabled>
        </div>

      
        
  <div class="item">
  <a href="edit_user_profile.php">Edit Profile</a>
   <a href="change_password.php">Change Password</a>
  </div>
  
    </form>
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