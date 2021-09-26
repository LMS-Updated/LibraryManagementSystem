<?php
function get_user_count(){
    $server= "localhost";
    $username="root";
    $password="";
    $dbname= "lms";
    $conn = mysqli_connect($server,$username,$password);
    $db_select = mysqli_select_db($conn,$dbname);
    $user_count="";
    $query="select count(*) as user_count from users";
    $query_run= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
           $user_count=$row['user_count']; 
    }
    return($user_count);
}

function get_book_count(){
    $server= "localhost";
    $username="root";
    $password="";
    $dbname= "lms";
    $conn = mysqli_connect($server,$username,$password);
    $db_select = mysqli_select_db($conn,$dbname);
    $book_count="";
    $query="select count(*) as book_count from books";
    $query_run= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
           $book_count=$row['book_count']; 
    }
    return($book_count);
}

function get_cat_count(){
    $server= "localhost";
    $username="root";
    $password="";
    $dbname= "lms";
    $conn = mysqli_connect($server,$username,$password);
    $db_select = mysqli_select_db($conn,$dbname);
    $cat_count="";
    $query="select count(*) as cat_count from category";
    $query_run= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
           $cat_count=$row['cat_count']; 
    }
    return($cat_count);
}

function get_author_count(){
    $server= "localhost";
    $username="root";
    $password="";
    $dbname= "lms";
    $conn = mysqli_connect($server,$username,$password);
    $db_select = mysqli_select_db($conn,$dbname);
    $author_count="";
    $query="select count(*) as author_count from authors";
    $query_run= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
           $author_count=$row['author_count']; 
    }
    return($author_count);
}

function get_issuedBook_count(){
    $server= "localhost";
    $username="root";
    $password="";
    $dbname= "lms";
    $conn = mysqli_connect($server,$username,$password);
    $db_select = mysqli_select_db($conn,$dbname);
    $issuedBook_count="";
    $query="select count(*) as issuedBook_count from issuedBooks";
    $query_run= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
           $issuedBook_count=$row['issuedBook_count']; 
    }
    return($issuedBook_count);
}
?>