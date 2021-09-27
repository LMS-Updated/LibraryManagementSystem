<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-------------------------------------------Bootstrap link----------------------------------------------------------------------------------->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!------------------------------------------Bootstrap scripts-------------------------------------------------------------------------------->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>


<!------------------------------------------External Stylesheet-------------------------------------------------------------------------------->
    <link rel="stylesheet" href="public/css/main.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
    <title>E-Library</title>
</head>

<body>
    <!--------------------------------------------------Navbar------------------------------------------------------------------------>
    <div>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
            <div class="container">
                <a class="navbar-brand " href="#"><span class="nav-logo"> LearnZILLA</span> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">TEAM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!------------------------------------------------HOme----------------------------------------------------------------------------->
    <div class="home" id="home">
    <img src="Images/homePageImage.svg" alt="main" width="700" height="900">
     <div class="homePageForm">
         <div class="homepage_quote">
       
         </div>
         <br>
         <div class="button_div">
         <button class="box">
             <a href="main.php">
                 Get access to offline Library
             </a>
         </button>
         <button class="box">
             <a href="">
                 Read articles
            </a>
        </button>
       </div>
     </div>
</div>


<!-------about-------->
<div class="about" id="about">
    <img src="Images/services.svg" alt="main" width="600" height="600" style="float:right; margin-right:150px;">
    <div class="aboutContent">
<h1 class="aboutheading">About</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nisi id dolores incidunt asperiores blanditiis deleniti rerum recusandae, necessitatibus quae obcaecati impedit voluptate neque ipsum ratione officiis. Voluptates, quod. Nihil.</p>
</div>
</div>
<!-----Services------->
<div class="services" id="services">

<h1 class="servicesheading">Services</h1>
<div class="row" >
<div class="col-sm-12 col-md-4">
<img src="Images/books.svg" alt="main" width="200" height="200" >
<h4>Access to books</h4>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum</p>
</div>
<div class="col-sm-12 col-md-4">
<img src="Images/responsive.svg" alt="main" width="200" height="200" >
<h4>Responsive to all devices</h4>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum</p>
</div>
<div class="col-sm-12 col-md-4">
<img src="Images/news.svg" alt="main" width="200" height="200" >
<h4>Can read news</h4>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum. Dolor aut, temporibus esse delectus distinctio facilis cupiditate quidem voluptatum soluta rerum</p>
</div>
</div>
</div>
<!-----------------------------------------------------TEAM SECTION------------------------------------------------------------------------->
<div class="team" id="team">
            <h1 class="heading"> Meet The Team <img src="Images/team.svg" height="100px" width="100px"> </h1>
            <div class="row team-content justify-content-center">
                <div class="col-sm-12 col-md-4 team-member">
                    <img src="Images/jugesh.jpg" alt="">
                    <div class="team-member-icons">
                        <i class="fab fa-facebook-f icon"></i>
                        <i class="fab fa-github icon"></i>
                        <i class="fab fa-instagram icon"></i>
                    </div>
                    <p class="name">JUGESH RAGHAV</p>
                    <P class="responsibility">Lead Developer</P>
                </div>
                <div class="col-sm-12 col-md-4 team-member">
                    <img src="Images/lucky.jpeg" alt="">
                    <div class="team-member-icons">
                        <i class="fab fa-facebook-f icon"></i>
                        <i class="fab fa-github icon"></i>
                        <i class="fab fa-instagram icon"></i>
                    </div>
                    <p class="name">LUCKY KASHYAP</p>
                    <P  class="responsibility">Lead Developer</P>
                </div>
                <div class="col-sm-12 col-md-4 team-member">
                    <img src="Images/rakesh.jpg" alt="">
                    <div class="team-member-icons">
                        <i class="fab fa-facebook-f icon"></i>
                        <i class="fab fa-github icon"></i>
                        <i class="fab fa-instagram icon"></i>
                    </div>
                    <p class="name">RAKESH SARKAR</p>
                    <P class="responsibility">Lead Developer</P>
                </div>
            </div>
    </div>

<!---------------------------------------------------------FOOTER---------------------------------------------------------------------------------------------->
<div class="footer" >
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