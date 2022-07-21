<?php
error_reporting(0);
include('connect.php');
session_start();
if(!isset($_SESSION['user']))
{
    header('location:signin.php');
}
$select="select * from signupdata where UNAME='$_SESSION[user]'";
$result=mysqli_query($db_connection, $select);
$data=mysqli_fetch_assoc($result);

$user_id=$data['ID'];
$user_name=$data['UNAME'];
$user_gender=$data['GENDER'];
$user_age=$data['DOB'];
$user_phone=$data['PHONE'];
$user_app=$_POST['app'];
$user_treat=$_POST['treat'];


if(isset($_POST['book']))
{


    $insert_query="INSERT INTO appointment(FNAME,PHONE,GENDER,TREATMENT,APPOINTMENT,AGE) VALUES ('$user_name','$user_phone','$user_gender','$user_treat','$user_app','$user_age')";
	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:PatientDashboard.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}



}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon1.png">
    <link rel="stylesheet" href="css/utilis.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
<style>
body
{
    background: url('img/bg17.jpg');
    background-size:cover;
}
.patient
{
    
    display:flex;
    align-items:center;
    justify-content:center;
    
    height:100vh;
    width:100%;

}
.boxMain
{
    background:white;
    border-radius:15px;
    padding:30px;
    display:flex;
     flex-direction:column;
     align-items:center;
     justify-content:center;
}
.Book
{
    margin:20px auto;
}
.boxMain .Book:hover
{
   background:white;
   border:2px solid #05a4fa;
   color: #05a4fa;
}
.box
{
    display:flex;
}
.box div
{
    margin:0% 30px;    
}
.box input
{
    border:2px solid #05a4fa;
    border-radius:5px;
}
.logout:hover
{
    font-weight:bold;
    cursor:pointer;
}
.gender
{
    margin:0% 5px;
}
label
{
    font-size:20px;
}
</style>
</head>
<body>
<!-- <h3>User Name : <?php echo $user_name ?> </h3>
<h3>User Name : <?php echo $user_phone ?> </h3>
<h3>User Name : <?php echo $user_age ?> </h3>
<h3>User Name : <?php echo $user_gender ?> </h3> -->

<form action="logout.php" method="post" enctype="multipart/form-data">
  <div class="navAdmin font5"style="display:flex;width:100%; background:#05a4fa;color:white;font-size:25px;position:fixed;top:0px; margin-bottom:20px">
   <h1 style="padding-left:20px;">
     Health Care
   </h1>
  
   <button class="logout" style="position:relative;left:76%;height:40px; width:70px;margin-top:11px;font-size:16px;color:white;background:#05ad1c;border:1.5px solid black;border-radius:3px">
     Logout
   </button>
  
  </div>
  </form>

  <form action="PatientDashboard.php" method="post" enctype="multipart/form-data">
<section class="patient">



<div class="boxMain">

<div class="box font3">

<div class="Col" style="margin:10px 20px;">

<label for="birthdaytime">Appointment:</label>
<input type="datetime-local"  value="<?php echo $row['Time']; ?>" class="app" id="app" name="app" REQUIRED>

</div>



<div>
<label for="name" class="head">
    Select
</label>
<div class="gends" style="margin-right:20px">

<input type="radio" name="treat" value="Dentist" class="gender"><label for="name">Dentist</label>

<input type="radio" name="treat" value="Heart" class="gender"><label for="name">Heart</label>

<input type="radio" name="treat" value="Brain" class="gender"><label for="name">Brain</label>
</div>




</div>

</div>


<button type="submit" name="book" class="Book logout" style="height:40px; width:70px;margin-top:50px;font-size:16px;color:white;background:#05ad1c;border:1.5px solid black;border-radius:3px">
     Book
</button>


</div>




</section>
</form>










</body>
</html>