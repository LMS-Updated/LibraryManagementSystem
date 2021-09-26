<?php

////////////////////////////////////////////////////////////////////database connection////////////////////////////////////
$server= "localhost";
$username="root";
$password="";
$dbname= "lms";
$conn = mysqli_connect($server,$username,$password);
if(! $conn){
   die("could not connect".mysqli_error());
}
   else{
//        echo 'connected successfully';
   }


////////////////////////////////////////////////////////////////////database selection//////////////////////////////////////////////
$db_select = mysqli_select_db($conn,$dbname);
if(!$db_select)
{
 die('Can\'t use ' . $dbname . ': ' . mysqli_error());
}
else{
//  echo "HOLY EFF";
}


///////////////////////////////////////////////////////////////////update values////////////////////////////////////////////////////
$name=$_POST['name'];
$email=$_POST['email'];


    $query = "UPDATE `admin` SET `fullname`='$name', `email`='$email' WHERE `email`='$email'";
    $result= mysqli_query($conn,$query);
    if($result){
        header("location:admin_signin.php");
    }else{
        // echo $name;
        // echo $email;
        // echo $mobile;
        echo mysqli_error($conn);
    }
 


?>
