<?php

$con = mysqli_connect("localhost","root","");

$db = mysqli_select_db($con, "details");

//taking values from user

$name= $_POST['firstname'];
$year = $_POST['year'];
$hostel = $_POST['hostel'];
$room = $_POST['room'];
$message = $_POST['complaint'];

$query = " INSERT INTO details (name,year,hostel,room,message)
VALUES ('$name' , '$year' , '$hostel' , '$room' , '$message')";
mysqli_query($con, $query);
header("location: Complaint.html");
?>
   
    
     