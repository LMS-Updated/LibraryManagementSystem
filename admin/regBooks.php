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
  <link rel="stylesheet" href="public/css/style.css">
  <!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
  <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
  <title>E-Library</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <h1 class="logo">E-Library</h1>
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
  </nav>
  <nav class="navbar navbar-expand-lg" style="background-color:yellow">
<div class="container-fluid">
  <ul class="navbar navbar-nav navbar-center">
<li class="nav-item">
  <a href="admin_dashboard.php" class="nav-link" >Dashboard</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
  <div class="dropdown-menu">
    <a href="" class="dropdown-item">Add New Book</a>
    <a href="" class="dropdown-item">Manage Books</a>
</div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
  <div class="dropdown-menu">
    <a href="" class="dropdown-item">Add New Category</a>
    <a href="" class="dropdown-item">Manage Categories</a>
</div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
  <div class="dropdown-menu">
    <a href="" class="dropdown-item">Add New Author</a>
    <a href="" class="dropdown-item">Manage Authors</a>
</div>
</li>
<li class="nav-item">
  <a href="" class="nav-link">Issue Book</a>
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

  
  <footer class="footer">
    <span>Copyrights @Team</span>
  </footer>
</body>

</html>