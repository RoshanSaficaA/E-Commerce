<?php
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'online');
// Get data from review
$user_name = $_POST['user_name'];
$email_id= $_POST['email_id'];
$password_1= $_POST['password_1'];
$rate_star= $_POST['rate_star'];
$message= $_POST['message'];
$rev="insert into review(user_name,email_id,password_1,rate_star,message) values ('$user_name','$email_id','$password_1','$rate_star','$message')";
if(!$result = $conn->query($rev)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        header('location:Home.html');
    }
?>