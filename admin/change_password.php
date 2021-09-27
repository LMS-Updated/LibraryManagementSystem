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
  height:65%;
  margin:auto;
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

button{
  text-decoration:none;
  margin:10px;
  padding: 10px;
  background-color:black;
  color:white;
  border:none;
  border-radius:10px;
}
button:hover{
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
    <form action="update_password.php" method="post">
    <div class="item">
    <h2>Change Password</h2>
    </div>
    <div class="item">
    <label for="currPass">Current Password</label>
        <input id="currPass" type="text" name="currPass" >
    </div>
        <div class="item">
        <label for="newPass">New Password</label>
        <input id="newPass" type="text" name="newPass"  >
        </div>
        
        
  <div class="item">
  <button type="submit" >Update Password</button>
  
  </div>
  
    </form>
</div>
 

</body>

</html>


