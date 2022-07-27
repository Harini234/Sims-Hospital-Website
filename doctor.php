<?php
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'doc');
    
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['doctorid']) && !empty($_POST['password']))
        {
            $doctorid=$_POST['doctorid'];
            $password=$_POST['password'];
            

            $query="insert into login_details(doctorid,password) values('$doctorid','$password')";
    
            $run = mysqli_query($connection,$query);
            
        }
        else
        {
            echo "all feilds are required";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
</head>
<body>
<style>
 
*{
    box-sizing: border-box;
}
body{
   
    background-color: white;
    background-image: url("https://i.pinimg.com/originals/b4/3d/b7/b43db78f64c8e26fb580bb7f00b66222.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 55% 100%;
    
}
.h1{
    text-align: right;
    display: block;
    font-size: 2em;
    margin-top: 15%;
    margin-bottom: 0.67em;
    margin-right: 15%;
    font-weight: bold;
    
    
}

.text {
  background-color: lightpink;
  font-size: 25px;
  color: black;
  position: absolute;
  top: 5%;
  float: right;
  width: 520px;
  height: 620px;
  padding: 10px;
  border: 5px solid black;
  right: 5%;
  text-align: center;
  
 }
/* CSS */
.button-1 {
  background-color: white;
  border: solid;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}

.button-1:hover,
.button-1:focus {
  background-color: pink;
}

::-webkit-scrollbar{
    display:none;
}

</style>

<body>

<div class="text">
<h1>WELCOME<br>
    SIMS HOSPITAL</h1>

    <p >Dear Doctors!!<br>Thank you for logging in . Here you all could provide your details
    about those patients who are suffering from diabetes,obesity,and also types of foods or meals that should be taken for treating other diseases to the nutritionists 
    so that they could guide the patients accordingly.Click below to enter the details.</p>

<a href="forms.php">
<button class="button-1" role="button">Click me!
</a>
</div>



</body>
</html>
