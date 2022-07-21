<?php
   
   include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $id=$_POST['id'];
	   $f_name=$_POST['fnameStaff'];
       $l_name=$_POST['lnameStaff'];
	   $email=$_POST['emailStaff'];
       $salary=$_POST['salaryStaff'];
       $selection=$_POST['SelectedStaff'];
	   $address=$_POST['addressStaff'];
	   $password=$_POST['passwordStaff'];
       $u_name=$_POST['unameStaff'];
       $phone=$_POST['phoneStaff'];
       $dob=$_POST['dobStaff'];
       $gender=$_POST['genderStaff'];
	   $bgroup=$_POST['bgroupStaff'];
	   $specialization=$_POST['specializationStaff'];
	   $filename= strtolower($_FILES["uploadfile"]["name"]);
		
	  
	   
	   
	   
   
  if($selection=='staff')
  {
	$tmp=explode('.', $filename); 
	$file_ext=end($tmp);
	
	
	if($file_ext=='doc' OR $file_ext=='docx' OR $file_ext=='pdf')
		
		{
	
	
	
	$tempfile= $_FILES["uploadfile"]["tmp_name"];
	
	$folder="CV/".$filename;
	$cv=$folder;
	$insert_query="INSERT INTO staff(UNAME,FNAME,LNAME,GENDER,PASSWORD,DOB,BGROUP,PHONE,EMAIL,ADDRESS,SALARY,CATOGARY,CV) VALUES ('$u_name','$f_name','$l_name','$gender','$password','$dob','$bgroup','$phone','$email','$address','$salary','$specialization','$cv')";
	move_uploaded_file($tempfile, $folder);
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}
       }
  }
  if($selection=='recep')
  {
	$tmp=explode('.', $filename); 
	$file_ext=end($tmp);
	
	
	if($file_ext=='doc' OR $file_ext=='docx' OR $file_ext=='pdf')
		
		{
	
	
	
	$tempfile= $_FILES["uploadfile"]["tmp_name"];
	
	$folder="CV/".$filename;
	$cv=$folder;
	$insert_query="INSERT INTO recep(UNAME,FNAME,LNAME,GENDER,PASSWORD,DOB,BGROUP,PHONE,EMAIL,ADDRESS,SALARY,CATOGARY,CV) VALUES ('$u_name','$f_name','$l_name','$gender','$password','$dob','$bgroup','$phone','$email','$address','$salary','$specialization','$cv')";
	move_uploaded_file($tempfile, $folder);
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}
}
  }
  if($selection=='doctor')
  {
	$tmp=explode('.', $filename); 
	$file_ext=end($tmp);
	
	
	if($file_ext=='doc' OR $file_ext=='docx' OR $file_ext=='pdf')
		
		{
	
	
	
	$tempfile= $_FILES["uploadfile"]["tmp_name"];
	
	$folder="CV/".$filename;
	$cv=$folder;
	$insert_query="INSERT INTO doctors(UNAME,FNAME,LNAME,GENDER,PASSWORD,DOB,BGROUP,PHONE,EMAIL,ADDRESS,SALARY,SPECIALIZATION,CV) VALUES ('$u_name','$f_name','$l_name','$gender','$password','$dob','$bgroup','$phone','$email','$address','$salary','$specialization','$cv')";
	move_uploaded_file($tempfile, $folder);	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}
    }
  }
   }

?>