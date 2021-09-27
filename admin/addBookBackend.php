<?php
  $server= "localhost";
  $username="root";
  $password="";
  $dbname= "lms";
  $conn = mysqli_connect($server,$username,$password);
  $db_select = mysqli_select_db($conn,$dbname);
///////////////////////////////////////////////////////////////////insert values////////////////////////////////////////////////////
$book_name=$_POST['book_name'];
$book_no=$_POST['book_no'];
$author_id=$_POST['author_id'];
$book_category=$_POST['book_category'];
$book_price=$_POST['book_price'];
//    echo "$book_name";

if($book_name!=Null && $author_id!=Null && $book_category!=Null && $book_no !=Null && $book_price !=Null)
{
    $query = "select * from books where book_no = '$book_no' && book_name = '$book_name'";
    $result= mysqli_query($conn,$query);
    $row = mysqli_num_rows($result);
    if($row==1){
        echo"duplicate data";
    }else{
       
        $query = "INSERT INTO `books` ( `book_no`, `book_name`, `author_id`, `category`,`price`) VALUES ( `$book_no`,`$book_name`,`$author_id`,`$book_category`,`$book_price`);";
        $query_run = mysqli_query($conn,$query);
        header("Location:regBooks.php");
    }
    
}
else{
    echo "please fill in the details.";
}

?>