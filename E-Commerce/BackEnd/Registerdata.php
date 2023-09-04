<?php
session_start();
header('location:login.html');
$Con=mysqli_connect('localhost','root','');
mysqli_select_db($Con,'online');

//Get data from Admin Login
$_name=$_POST['name'];
$_mail=$_POST['mail'];
$_pass=$_POST['pass'];


$s= "select * from register where email= '$_mail' ";
$result = mysqli_query($Con,$s);
$num = mysqli_num_rows($result);
if($num==1){
echo" Username Already exist ";
}
else{
    $store="insert into register( username, email, password) values  ('$_name','$_mail','$_pass')";
mysqli_query($Con,$store);

}
?>
