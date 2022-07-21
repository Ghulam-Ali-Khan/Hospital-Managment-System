<?php
   
   include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $id=$_POST['id'];
	   $f_name=$_POST['fname'];
       $l_name=$_POST['lname'];
	   $email=$_POST['email'];
	   $password=$_POST['password'];
       $u_name=$_POST['uname'];
       $phone=$_POST['phone'];
       $dob=$_POST['dob'];
       $gender=$_POST['gender'];
	$insert_query="INSERT INTO signupdata(FNAME,LNAME,EMAIL,GENDER,PASSWORD,DOB,UNAME,PHONE) VALUES ('$f_name','$l_name','$email','$gender','$password','$dob','$u_name','$phone')";
	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:Login As.php');
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
    <link rel="icon" href="img/icon1.png">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/utilis.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
</head>
<body>
    <div class="container">
       
       <div class="nameHead font2" id="name-head">
         <h1 class="head">Health Care</h1>
       </div>
       <h2 class="H2head font4">
       Sign Up
       </h2>

     <div class="Form font4" id="Form">
     <form action="signup.php" enctype="multipart/form-data" method="post" class="Form-style">
     <div class="inputs">
     <div class="row1">
     <div>
     <label for="name">First Name</label>
     <input type="text" name="fname" placeholder="i.e..Zain" onfocus="borderFocus()">
     </div>
     <div>
     <label for="name">Last Name</label>
     <input type="text" name="lname" placeholder="i.e..Ali">
     </div>
     </div>
     <div class="row2">
     <div>
     <label for="name">User-Name</label>
     <input type="text" name="uname" placeholder="i.e..Ali123">
     </div>
     <div>
     <label for="name">Password</label>
     <input type="password" name="password" placeholder="i.e..abc786">
     </div>
    </div>
    <div class="row3"> 
    <div>
     <label for="name">Phone</label>
     <input type="text" name="phone" placeholder="i.e..03********">
     </div>
     <div>
     <label for="name">Email</label>
     <input type="email" name="email" placeholder="i.e..abc@gmail.com">
     </div>
      </div>
     </div>

     <div class="row4">
     <div class="gender">
    <label for="name" id="gen">Gender</label>
     <div>
     <div>
     <label for="name">Male</label>
     <input type="radio" name="gender" value="male">
     </div>
     <div>
     <label for="name">Female</label>
     <input type="radio" name="gender" value="female">
     </div>
     <div>
     <label for="name">Other</label>
     <input type="radio" name="gender" value="other">
     </div>
    </div>
</div>
     <div class="dob">
     
     <label for="start" id="lab">DOB</label>
<input type="date" id="start" name="dob" class="font4" name="trip-start"
       value="2020-04-08"
       min="1900-01-01" max="2021-12-31">
     </div>
   
</div>
     <button type="submit" class="btn font4">Sign Up</button>
     </form>
     </div>
    </div>

</body>
</html>