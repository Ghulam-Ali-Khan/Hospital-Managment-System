<?php
   
   include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $u_id=$_POST['id'];
	   $u_fname=$_POST['fname'];
	   $u_email=$_POST['email'];
	   $u_uname=$_POST['uname'];
	   $u_lname=$_POST['lname'];
	   $u_gender=$_POST['gender'];
	   $u_dob=$_POST['dob'];
	   $u_phone=$_POST['phone'];
	   $u_password=$_POST['password'];
   
	   $update_query="update signupdata SET UNAME='$u_uname',Email='$u_email',PASSWORD='$u_password',FNAME='$u_fname',LNAME='$u_lname',GENDER='$u_gender',PHONE='$u_phone',DOB='$u_dob' WHERE id='$u_id'";
	
	if(mysqli_query($db_connection, $update_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}

   }

?>
