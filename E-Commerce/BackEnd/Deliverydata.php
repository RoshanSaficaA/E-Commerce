<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'online');
// Get data from review
$Fname= $_POST['name1'];
$Lname= $_POST['name2'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$add1= $_POST['Add1'];
$add2= $_POST['Add2'];
$state= $_POST['state'];
$city= $_POST['city'];
$Area= $_POST['Area'];
$pin= $_POST['pin'];
$check=$_POST['check'];

$rev="insert into delivery(FirstName,LastName,Email,PhoneNumber,Address1,Address2,State,City,Area,Pincode,Type) values ('$Fname','$Lname','$email','$phone','$add1','$add2','$state','$city','$Area','$pin','$check')";
if(!$result = $conn->query($rev)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        header('location:Confirm.html');
    }
?>
