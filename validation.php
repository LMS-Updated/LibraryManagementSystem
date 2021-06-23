 <!---------------------database connection------------------------------------>
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
$email=$_POST['email'];
$password=$_POST['password'];


    $query = "select * from users where email = '$email' && password = '$password'";
    $result= mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
      echo $row['fullname'];
      $_SESSION['username'] == "hii";
      if(!isset($_SESSION['username'])){
         echo "session variable problem firse";
      
      }else{
         echo $_SESSION['username'];
       
      }
     

      //   while($row = mysqli_fetch_assoc($result)){
      //       if($row['email']==$email){
      //           if($row['password']==$password){
      //             $_SESSION['username'] == $row['fullname'];
      //               header("location:user-homepage.php");
      //               echo $row['fullname'];
      //               echo $_SESSION['username'];
      //           }else{
      //               header("Location:user-signin.php");
      //               echo "please fill in the correct details";
      //           }
      //          }
      //       }
      
  

?>