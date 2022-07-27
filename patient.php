<?php
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'doc');
    
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['patientid']) && !empty($_POST['mobileno']))
        {
            $patientid=$_POST['patientid'];
            $mobileno=$_POST['mobileno'];
            

            $query="insert into patient_details(patientid,mobileno) values('$patientid','$mobileno')";
    
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
    <title>Nutritionist</title>
</head>
<body>
<style>

* {
  box-sizing: border-box;
}
body{
   
    background-color: white;
    background-image: url("https://thumbs.dreamstime.com/b/doctor-patient-cartoon-doctor-patient-cartoon-icon-vector-illustration-graphic-design-health-healthcare-109797222.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    
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
  background-color:  white;
  font-size: 25px;
  color: black;
  position: absolute;
  top: 15%;
  left: 35%;
  float: center;
  width: 520px;
  height: 420px;
  padding: 10px;
  border: 5px solid black;
  text-align: center;
  
 }
/* CSS */
.button-1 {
  background-color: black;
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

</style>

<body>
<div class="text">
<h1>WELCOME<br>
    SIMS HOSPITAL</h1>
<p >Dear Patient<br>Thank you for logging in . Please provide your details .Click below to view your diet chart</p>
<a href="view.php">
<button class="button-1" role="button">Click me!</button>
</a>
</div>   
</body>
</html>