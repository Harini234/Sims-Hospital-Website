<?php
session_start();
header('location:sp.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];
$s = "select * from users where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "Username Aready Taken";
}
else{
    $reg = "insert into users(name,email,password) values('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}
?>