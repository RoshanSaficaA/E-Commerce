<?php
session_start();
$Con =mysqli_connect('localhost','root','');
mysqli_select_db($Con,'online');
$mail= $_POST['mail1'];
$pass= $_POST['pass1'];
$s=" select * from register where email= '$mail' && password= '$pass' ";
$result = mysqli_query($Con,$s);
$num= mysqli_num_rows($result);
if($num==1){
  $_SESSION['mail']== $mail;
  $_SESSION['pass']== $pass;
header('location:Home.html');
}
else{
header('location:login.html');
}
?>