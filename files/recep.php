<?php

include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $id=$_POST['id'];
       $fname=$_POST['Fname'];
       $age=$_POST['Age'];
       $gender=$_POST['gender'];
       $app=$_POST['app'];
       $treat=$_POST['treat'];
       $phone=$_POST['Phone'];
  
	$insert_query="INSERT INTO appointment(FNAME,PHONE,GENDER,TREATMENT,APPOINTMENT) VALUES ('$fname','$phone','$gender','$treat','$app')";
	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:recep.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}
  


   }


   $select ="select * from appointment ORDER BY APPOINTMENT ASC;";
   $result =mysqli_query($db_connection, $select);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/utilis.css">
    <link rel="stylesheet" href="css/recep.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
    <style>

tr:hover
{

    background:#05a4fa;
    color: white;
}
tr button
{

}
.edit
{
    padding:5px 10px;
    background:#05ad1c;
    color:white;
    border-radius:3px;
    font-size:15px;
    margin:5px 20px;
}
.delete
{
    padding:5px 10px;
    background:red;
    color:white;
    border-radius:3px;
    font-size:15px;
    margin:5px 20px;
}
body
{
    background-image: url('img/bg17.jpg');
    background-size: cover;
}
    </style>
</head>
<body>
<div class="container" >
<form action="logout.php" method="post" enctype="multipart/form-data">  
<div class="nav">

<h1 class="font5">
Health Care 
</h1>
          
<button class="btnLogout">
Logout
</button>

</div>
</form>



<div class="billing font4">

<div class="recordEnter">
<div class="heading">
<h1>
    Billing
</h1>
</div>

<div class="content">
<div class="row">

<input type="text" name="fname" placeholder="Enter Name" id="fname">

<input type="text" name="age" placeholder="Enter Age" id="age">

</div>

<div class="row">

<div class="gender">
<label for="name" class="head">
    Gender
</label>
<div class="gends">

<input type="radio" name="gender" value="male" class="gender"><label for="name">Male</label>

<input type="radio" name="gender" value="female" class="gender"><label for="name">Female</label>

<input type="radio" name="gender" value="other" class="gender"><label for="name">Other</label>
</div>
</div>

<div class="select">
<label for="name" class="head">
    Select
</label>
<div class="selection">
<label for="name">General</label>
<input type="radio" name="test" value="general" id="general">
<label for="name">Emergency</label>
<input type="radio" name="test" value="emergency"id="emergency">

</div>
</div>


</div>

<div class="btn-enter font3">
<button class="btn" onclick="getData()">
    Enter
</button>
</div>

</div>



</div>
<div class="recordDisplay" >
<div class="heading">
<h1>
    Receipt
</h1>
</div>

<div class="content content2" id="print">
<h1 class="font2">
Health Care
</h1>
<h2 class="font3">
Recipt
</h2>
<p><---------------------------------------------></p>
<p id="content">


</p>

</div>
<button class="btn print-btn" id="print-btn" onclick="print()">
Print
</button>
</div>

</div>




<div class="appointment font3" style="width:100%;" >

<div class="appoint" style="width:92%;background:white;border-radius:15px">
<div class="heading" style="font-size:13px;background:#05a4fa;color:white;border-top-left-radius:15px;border-top-right-radius:15px;">
<h1 style="padding:5px 10px">
    Book Appointment
</h1>
</div>
<form action="recep.php" method="post" enctype="multipart/form-data">
<div class="Row" style="display:flex;margin-top:20px">
<div class="Col"style="display:inline-block;margin:0% 20px">
<label for="name">Full Name</label>
<input type="text" name="Fname"placeholder="Enter" style="height:30px;border-radius:5px" >
</div>
<div class="Col"style="display:inline-block;margin:0% 20px">
<label for="name">Age</label>
<input type="text" name="Age"  placeholder="Enter" style="height:30px;border-radius:5px" >
</div>
<div class="Col"style="display:inline-block;margin:0% 20px">
<label for="name">Phone</label>
<input type="text" name="Phone" placeholder="Enter" style="height:30px;border-radius:5px" >
</div>
<div class="Col gender">
<label for="name" class="head">
    Gender
</label>
<div class="gends">

<input type="radio" name="gender" value="male" class="gender"><label for="name">Male</label>

<input type="radio" name="gender" value="female" class="gender"><label for="name">Female</label>

<input type="radio" name="gender" value="other" class="gender"><label for="name">Other</label>
</div>
</div>


<label for="name" class="head">
    Select
</label>
<div class="gends" style="margin-right:20px">

<input type="radio" name="treat" value="Dentist" class="gender"><label for="name">Dentist</label>

<input type="radio" name="treat" value="Heart" class="gender"><label for="name">Heart</label>

<input type="radio" name="treat" value="Brain" class="gender"><label for="name">Brain</label>
</div>

</div>
<div class="Col" style="margin:10px 20px;">

<label for="birthdaytime">Appointment:</label>
<input type="datetime-local"  value="<?php echo $row['Time']; ?>" class="app" id="app" name="app" REQUIRED>

</div>

<button type="submit" name="submit" class="btn" style="margin:20px 45%;border-radius:5px" >
Add Appointment
</button>
</div>



</form>


</div>
<div class="Table-content font3" style="border-radius:15px;background:white;width:82.5%;margin:70px 7.5%;padding-bottom:20px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Appointments 
 </h3>
 
</div>
<table border=1 width="100%">
<tr><th>ID</th><th>FNAME</th><th>PHONE</th><th>GENDER</th><th>TREATMENT</th><th>APPOINTMENT</th><th>AGE</th><th>Edit</th><th>Delete</th></tr>
<?php
while($view=mysqli_fetch_assoc($result))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['FNAME']}</td>";
    echo"<td>{$view['PHONE']}</td>";
    echo"<td>{$view['GENDER']}</td>";
    echo"<td>{$view['TREATMENT']}</td>";
    echo"<td>{$view['APPOINTMENT']}</td>";
    echo"<td>{$view['AGE']}</td>";
    echo"<td><a href='edit.php?id=".$view['ID']."'><button class='edit'>Edit</button></a></td>";
    echo"<td><a href='delete.php?id=".$view['ID']."'><button class='delete'>Delete</button></a></td></tr>";


}
?>
</table>
</div>




</div>
<script src="js/recep.js"></script>
</body>
</html>