
 <?php
session_start();
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


///////////////////////////////////////////////////////////////////insert values////////////////////////////////////////////////////
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$roll_no=$_POST['roll_no'];
$address=$_POST['address'];
//    echo "$fullname";

if($fullname!=Null&& $email!=Null && $mobile !=Null && $password !=Null )
{
    $query = "select * from users where email = '$email' && password = '$password'";
    $result= mysqli_query($conn,$query);
    $row = mysqli_num_rows($result);
    if($row==1){
        echo"duplicate data";
    }else{
       
        $query = "INSERT INTO `users` (`uid`, `fullname`, `email`, `mobile`, `password`, `roll_no`, `address`) VALUES ('', '$fullname', '$email', '$mobile', '$password', '$roll_no', '$address')";
        $query_run = mysqli_query($conn,$query);
        header("Location:user_signin.php");
    }
    
}
else{
    echo "please fill in the details.";
}


?>