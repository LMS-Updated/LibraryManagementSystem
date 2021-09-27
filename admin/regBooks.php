<?php
$server= "localhost";
$username="root";
$password="";
$dbname= "lms";
$conn = mysqli_connect($server,$username,$password);
$db_select = mysqli_select_db($conn,$dbname);

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
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/style.css">
<!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>

</head>
<title>LearnZilla</title>
</head>
<style>
body{
  padding:5% 0 0 0;
}
.card{
  margin:10%;
}
table{
  width:80%;
  height:50%;
  margin:auto;
  text-align:center;
  padding-bottom:5%;
}
th{
  font-size:20px;
  background-color:yellow;
}

</style>
<body>

<!---------------------------------Navbar---------------------------->
<nav class="navbar navbar-expand-lg fixed-top navbar-light ">
            <div class="container">
                <a class="navbar-brand " href="index.php"><span class="nav-logo"> LearnZILLA</span> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
      <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
              <h5>
              <a class="nav-link" href="admin_profile.php">Profile</a>
              </h5>
          </li>
          
                    <li class="nav-item">
              <h5>
                <a class="nav-link" href="logout.php">Logout</a>
              </h5>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg" style="background-color:green; ">
<div>
  <ul class="navbar navbar-nav navbar-center">
<li class="nav-item">
  <a href="admin_homepage.php" class="nav-link" >Dashboard</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
  <div class="dropdown-menu">
    <a href="add_book.php" class="dropdown-item">Add New Book</a>
    <a href="manage_book.php" class="dropdown-item">Manage Books</a>
</div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
  <div class="dropdown-menu">
    <a href="add_category.php" class="dropdown-item">Add New Category</a>
    <a href="manage_category.php" class="dropdown-item">Manage Categories</a>
</div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
  <div class="dropdown-menu">
    <a href="add_author.php" class="dropdown-item">Add New Author</a>
    <a href="manage_author.php" class="dropdown-item">Manage Authors</a>
</div>
</li>
<li class="nav-item">
  <a href="issue_book.php" class="nav-link">Issue Book</a>
</li>
</ul>
</div>
</nav>
    <br> 

<!-------------------------------registered user table------------------------------------------->
<table class="table-bordered">
    <tr>
    <th>Book No.</th>
    <th>Book Name</th>
    <th>Author</th>
    <th>Price</th>
    <th>Category</th>
</tr>
<?php
 $query = "select books.book_name, books.book_no,books.price,authors.name from books left join authors on books.author_id = authors.id";
 $result= mysqli_query($conn,$query);
     while($row = mysqli_fetch_assoc($result)){
                $book_name= $row['book_name'];
                $author= $row['name'];
                $book_no = $row['book_no'];
                $price = $row['price'];
                ?>
<tr>
    <td><?php echo $book_no; ?></td>
    <td><?php echo $book_name; ?></td>
    <td><?php echo $author; ?></td>
    <td>Rs<?php echo $price; ?></td>
    <td>waiting</td>
</tr>
<?php
     }
?>
</table>

</body>

</html>