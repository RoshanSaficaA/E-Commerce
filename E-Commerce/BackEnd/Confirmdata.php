<?php
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'online');
// Get data from review
$check= $_POST['check'];
$card= $_POST['card'];
$date= $_POST['date'];
$cvv= $_POST['cvv'];

$rev="insert into payment(CheckType,CardNumber,Date,Cvv) values ('$check','$card','$date','$cvv')";
if(!$result = $conn->query($rev)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        header('location:Final.html');
    }
?>