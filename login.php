<?php
$username= $_POST['uname'];
$password= $_POST['psw'];
//establishing connection
$con = mysqli_connect("localhost" , "root" , "");
// selecting db
$db = mysqli_select_db($con, "project1");   

$query = mysqli_query($con , "SELECT * FROM login WHERE password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);
if($rows==1)
{
    header("location: insider.php");
}
else{
    $error="Username or pasword is invalid";
    
}
mysqli_close($con);

?>
