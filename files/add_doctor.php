<?php
   
   include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $id=$_POST['id'];
	   $f_name=$_POST['fnameStaff'];
       $l_name=$_POST['lnameStaff'];
	   $email=$_POST['emailStaff'];
       $salary=$_POST['salaryStaff'];
       $cnic=$_POST['cnicStaff'];
	   $address=$_POST['addressStaff'];
	   $password=$_POST['passwordStaff'];
       $u_name=$_POST['unameStaff'];
       $phone=$_POST['phoneStaff'];
       $dob=$_POST['dobStaff'];
       $gender=$_POST['genderStaff'];
	   $bgroup=$_POST['bgroupStaff'];
	   $specialization=$_POST['specialization'];
	$insert_query="INSERT INTO doctors(UNAME,FNAME,LNAME,GENDER,PASSWORD,DOB,BGROUP,PHONE,ADDRESS,EMAIL,CNIC,SALARY,SPECIALIZATION) VALUES ('$u_name','$f_name','$l_name','$gender','$password','$dob','$bgroup','$phone','$address','$email','$cnic','$salary','$specialization')";
	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}

   }

?>