<?php

include('connect.php'); 

$select ="select * from signupdata";
$result =mysqli_query($db_connection, $select);
$select1 ="select * from staff";
$result2 =mysqli_query($db_connection, $select1);
$select2="select * from doctors";
$result3=mysqli_query($db_connection, $select2);
$select3="select * from ambulance";
$result4=mysqli_query($db_connection, $select3);
session_start();
$e_id="";
$e_uname="";
$e_email="";
$e_password="";
$e_phone="";
$e_lname="";
$e_fname="";
$e_dob="";
$e_gender="";
$selection="";
$Search=0;
if(isset($_POST['submit']))
{
	
	function clean_input($field)
	{
		
		$field= trim($field);
		$field= stripslashes($field);
		$field= htmlspecialchars($field);
		
		return $field;
		
		
	}
  $uname=clean_input($_POST['uname']);
  if($_SERVER['REQUEST_METHOD']=='POST')
  $selection=clean_input($_POST['SStaff']);
 
 if($selection=='staff')
 {
       $login="select * from staff WHERE UNAME='".$uname."'";
       echo $login;
       $result1=mysqli_query($db_connection, $login);
      
       $data=mysqli_fetch_assoc($result1);
       
         
         $_SESSION['user']=$uname;                
         $e_id=$data['ID'];
         $e_uname=$data['UNAME'];
         $e_fname=$data['FNAME'];
         $e_lname=$data['LNAME'];
         $e_gender=$data['GENDER'];
         $e_password=$data['PASSWORD'];
         $e_dob=$data['DOB'];
         $e_bgroup=$data['BGROUP'];
         $e_phone=$data['PHONE'];
         $e_email=$data['EMAIL'];
         $e_cat=$data['CATOGARY'];         
         $e_address=$data['ADDRESS'];
         $e_salary=$data['SALARY'];
    
          $Search=1;  
                
          }              
       
       
         
   
   
   
 
	
	
	
elseif($selection=='patient')
{
			$login="select * from signupdata WHERE UNAME='".$uname."'";
			echo $login;
      $result1=mysqli_query($db_connection, $login);
      
			$data=mysqli_fetch_assoc($result1);

			         	
				       $_SESSION['user']=$uname;                
                $e_id=$data['ID'];
                $e_uname=$data['UNAME'];
                $e_email=$data['EMAIL'];
                $e_password=$data['PASSWORD'];
                $e_phone=$data['PHONE'];
                $e_lname=$data['LNAME'];
                $e_fname=$data['FNAME'];
                $e_dob=$data['DOB'];
                $e_gender=$data['GENDER'];
                
                $Search=2;   
            echo"Ali";
							
			
			
			
			
			
        
	
	
	
}


elseif($selection=='doctor')
{
			$login="select * from doctors WHERE UNAME='".$uname."'";
			$result1=mysqli_query($db_connection, $login);
			
		$data=mysqli_fetch_assoc($result1);
			
				
				// $_SESSION['user']=$uname;                
        $e_id=$data['ID'];
        $e_uname=$data['UNAME'];
        $e_email=$data['EMAIL'];
        $e_password=$data['PASSWORD'];
        $e_phone=$data['PHONE'];
        $e_lname=$data['LNAME'];
        $e_fname=$data['FNAME'];
        $e_dob=$data['DOB'];
        $e_gender=$data['GENDER'];
        $e_spec=$data['SPECIALIZATION'];
        $e_bgroup=$data['BGROUP'];
        $e_address=$data['ADDRESS'];
        $e_salary=$data['SALARY'];
        
							
			
			   $Search=3;
        
	
	
	
}


}

$no_plate="";
$engine_no="";
$model_no="";

if(isset($_POST['submit1']))
{
  
  function clean_input($field)
  {
    
    $field= trim($field);
    $field= stripslashes($field);
    $field= htmlspecialchars($field);
    
    return $field;
    
    
  }
  
  
  
  $no_plate=clean_input($_POST['no_plate']);

  
  
  
      $login1="select * from ambulance WHERE NPLATE='".$no_plate."'";
      $result2=mysqli_query($db_connection, $login1);
      
      if($data1=mysqli_fetch_assoc($result2))
      {
        
        // $_SESSION['user']=$no_plate;
        
        $no_plate=$data1['NPLATE'];
        $model_no=$data1['MODELN'];
        $engine_no=$data1['ENGINEN'];
      
      }
      
      else
        
        {
          
          echo "please enter correct information user name and/or password";
          
        }
      
      
    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/utilis.css">
    <link rel="stylesheet" href="css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.enter-account
{
    display: flex;    
}
.enter-account .input
{
    height:30px;
    width: 250px;
    border:1.5px solid #05a4fa;
    border-radius:5px;
    padding:5px;
}
.col div
{
  display: flex;
  flex-direction:column;
  margin:20px 30px;
}
.gender div div
{
  display:inline-block;
  margin: 4px 6px;  

}
.gender div 
{
   margin:0;
   display:flex;
   flex-direction: row;

}
.gender label
{
  font-size:15px;
}
.gender #gen
{
  font-size:20px;
  font-weight:bold;
  margin-bottom:0;
}
#start
{
  width:150px;
  border:1.5px solid #05a4fa;
    border-radius:5px;
    padding:5px;
}
.btnAddStaff
{
  padding:10px 15px;
  font-size:25px;
  margin-left:10px;
  border:none;
  color:white;
  background:#05ad1c;
  border-radius:5px;
}
.btnAddStaff:hover
{
  cursor:pointer;
  background:#05a4fa;
}
.selectAdd
{
  margin:50px 40%;
}
tr:hover
 {
   background-color:#05a4fa;
   color:white;  
}
.Table-content button
{
   font-size:20px;
   padding:5px;
   border-radius:5px;
   margin:5px 40px;
   color:white;
}
.edit
{
  background:#05ad1c;
}
.delete
{
  background:red;
}
.ambTable button
{
  margin-left: 180px;
}
body
{
    background-image: url('img/bg17.jpg');
    background-size: cover;
}
    </style>
</head>
<body>
    
<div class="container">
<div class="contents" style="margin:0">
<form action="logout.php" method="post" enctype="multipart/form-data">
  <div class="navAdmin font5"style="display:flex;width:100%; background:#05a4fa;color:white;font-size:25px;position:fixed;top:0px; margin-bottom:20px">
   <h1 style="padding-left:20px;">
     Health Care
   </h1>
  
   <button style="position:relative;left:76%;height:40px; width:70px;margin-top:11px;font-size:16px;color:white;background:#05ad1c;border:1.5px solid black;border-radius:3px">
     Logout
   </button>
  
  </div>
  </form>
<div class="boxes font2" style="margin-top:150px">
<div class="color1 box">
<h2 id="numPatients">
    1215
</h2>
<p>
Patients
</p>
</div>
<div class="color2 box">
<h2 id="numDoctors">
    777
</h2>
<p>
Doctors
</p>
</div>
<div class="color3 box">
<h2 id="numStaff">
    150
</h2>
<p>
Staff
</p>
</div>
<div class="color4 box">
<h2 id="numAmb">
    15
</h2>
<p>
Ambulances
</p>
</div>
</div>
<!-- start -->
<div class="search-add font4" >  
<div class="search">
<div class="search-lab font4">
<h2>
Search Saff
</h2>
</div>     
<div class="row">

    <div class="input">
        <form action="admin.php" method="post" enctype="multipart/form-data">
    <label for="name">User-Name</label>
    <input type="text" name="uname" id="done"  placeholder="User-Name">
    </div>
<div class="select">
     <div>
     <label for="name">Staff</label>
     <input type="radio" name="SStaff" value="staff">
     </div>
     <div>
     <label for="name">Doctor</label>
     <input type="radio" name="SStaff" value="doctor">
     </div>
     <div>
     <label for="name">Patient</label>
     <input type="radio" name="SStaff" value="patient">
     </div>
</div>
    

<button type="submit" name="submit"   class="btn">Search</button>
</form>
</div>

<div class="info-searched" id="doc">
<?php
    
    if($Search==2)
     {
     echo("------ID : <i>{$e_id}</i>");
     echo("<br>------User-Name : <i>{$e_uname}</i>");
     echo("<br>------First-Name : <i>{$e_fname}</i>");
     echo("<br>------Last-Name : <i>{$e_lname}</i>");
     echo("<br>------Password : <i>{$e_password}</i>");
     echo("<br>------Email : <i>{$e_email}</i>");
     echo("<br>------DOB : <i>{$e_dob}</i>");
     echo("<br>------Gender : <i>{$e_gender}</i>");
     echo("<br>------Phone : <i>{$e_phone}</i>");
     echo("<button  style='display:none'>Hard work</button>");
     }
     elseif($Search==1)
     {
      echo("------ID : <i>{$e_id}</i>");
      echo("<br>------User-Name : <i>{$e_uname}</i>");
      echo("<br>------First-Name : <i>{$e_fname}</i>");
      echo("<br>------Last-Name : <i>{$e_lname}</i>");
      echo("<br>------Password : <i>{$e_password}</i>");
      echo("<br>------Email : <i>{$e_email}</i>");
      echo("<br>------DOB : <i>{$e_dob}</i>");
      echo("<br>------Gender : <i>{$e_gender}</i>");
      echo("<br>------Phone : <i>{$e_phone}</i>");
      echo("<br>------Catogary : <i>{$e_cat}</i>");
      echo("<br>------Blood Group : <i>{$e_bgroup}</i>");
      echo("<br>------Address : <i>{$e_address}</i>");
      echo("<br>------Salary : <i>{$e_salary}</i>");
      echo("<button  style='display:none'>Hard work</button>");
  
     }
     elseif($Search==3)
     {
      echo("------ID : <i>{$e_id}</i>");
      echo("<br>------User-Name : <i>{$e_uname}</i>");
      echo("<br>------First-Name : <i>{$e_fname}</i>");
      echo("<br>------Last-Name : <i>{$e_lname}</i>");
      echo("<br>------Password : <i>{$e_password}</i>");
      echo("<br>------Email : <i>{$e_email}</i>");
      echo("<br>------DOB : <i>{$e_dob}</i>");
      echo("<br>------Gender : <i>{$e_gender}</i>");
      echo("<br>------Phone : <i>{$e_phone}</i>");
      echo("<br>------Specialization : <i>{$e_spec}</i>");
      echo("<br>------Blood Group : <i>{$e_bgroup}</i>");
      echo("<br>------Address : <i>{$e_address}</i>");
      echo("<br>------Salary : <i>{$e_salary}</i>");
      echo("<button  style='display:none'>Hard work</button>");
  
     }


?>
</div>
</div>
<div class="add font3">
<div class="add-staff font4">
<h2>Add Vechile</h2>
</div>
<div class="Form-main">
<form action="add_vechile.php" class="font4 Form-add" enctype="multipart/form-data" method="post" >
<label for="name">Engine Number</label>
<input type="text" name="engine_no" placeholder="Enter">
<label for="name">Model Number</label>
<input type="text" name="model_no" placeholder="Enter">
<label for="name">Plate Number</label>
<input type="text" name="no_plate" placeholder="Enter">
<div class="button">
<button name="submit" class="btn-amb" type="submit">ADD</button>
</div>
</form>
</div>
</div>

<div class="add font3">
<div class="add-staff font4">
<h2>Search Vechile</h2>
</div>
<div class="Form-main">
<form action="admin.php" class="font4 Form-add" enctype="multipart/form-data" method="post" >
<div class="row-amb">
<div>
<label for="name">Plate Number</label>
<input type="text" name="no_plate" placeholder="Enter">
</div>
<div class="button">
<button name="submit1" class="btn" type="submit">Search</button>
</div>
  </div>

</form>


</div>
<div class="amb-searched">
<br><br><br>
<?php
     
     echo("------Number Plate : <i>{$no_plate}</i>");
     echo("<br>------Model-Name : <i>{$engine_no}</i>");
     echo("<br>------Engine-Name : <i>{$model_no}</i>");
     echo("<button  style='display:none'>Hard work</button>");
?>


</div>
</div>
</div>
<div class="create-staff" id="createStaff" style="height:450px;width:85%;background:white;margin:20px 7.5%;border-radius:15px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Add Staff
 </h3>
 
</div>
<form action="add_staff.php"  enctype="multipart/form-data" method="post" >
<div class="enter-account font3" id="enterAccount" style="display:flex">
  <div class="col">

  <div>
  <label for="name">First Name</label>
  <input type="text" placeholder="Enter" name="fnameStaff" class="input">
  </div>
  <div>
  <label for="name">Last Name</label>
  <input type="text" placeholder="Enter" name="lnameStaff" class="input">
  </div>
  <div>
  <label for="name">User Name</label>
  <input type="text" placeholder="Enter" name="unameStaff" class="input">
  </div>
  
  </div>
  <div class="col">
 
  <div>
  <label for="name">Email</label>
  <input type="text" placeholder="Enter" name="emailStaff" class="input">
  </div>
  <div>
  <label for="name">Specialization</label>
  <input type="text" placeholder="Enter" name="specializationStaff" class="input">
  </div>
  <div>
  <label for="name">Phone</label>
  <input type="text" placeholder="Enter" name="phoneStaff" class="input">
  </div>

  </div>
  <div class="col">
 
  <div>
  <label for="name">Password</label>
  <input type="text" placeholder="Enter" name="passwordStaff" class="input">
  </div>
  <div>
  <label for="name">Salary</label>
  <input type="text" placeholder="Enter" name="salaryStaff" class="input">
  </div>
  <div>
  <label for="name">Blood Group</label>
  <input type="text" placeholder="Enter" name="bgroupStaff" class="input">
  </div>
  </div>
  <div class="col">
 
  <div>
  <label for="name">Address</label>
  <input type="text" placeholder="Enter" name="addressStaff" class="input" id="address">
  </div>
  <div class="gender" style="display:flex">
    <label for="name" id="gen">Gender</label>
     <div>
     <div>
     <label for="name">Male</label>
     <input type="radio" name="genderStaff" value="male">
     </div>
     <div>
     <label for="name">Female</label>
     <input type="radio" name="genderStaff" value="female">
     </div>
     <div>
     <label for="name">Other</label>
     <input type="radio" name="genderStaff" value="other">
     </div>
    </div>
</div>
     <div class="dob">
     
     <label for="start" id="lab">DOB</label>
<input type="date" id="start" name="dobStaff" class="font4" name="trip-start"
       value="2020-04-08"
       min="1900-01-01" max="2021-12-31">
     </div>
  </div>
</div>
<div class="font2" style="margin:5px 40%">

<label for="name">Curriculum vitae</label>
     <input type="file" name="uploadfile" value="doctor">


</div>
<div class="gender font3 selectAdd" style="display:flex">
    <label for="name" id="gen">Select</label>
     <div>
     <div>
     <label for="name">Doctor</label>
     <input type="radio" name="SelectedStaff" value="doctor">
     </div>
     <div>
     <label for="name">Staff</label>
     <input type="radio" name="SelectedStaff" value="staff">
     </div>
     <div>
     <label for="name">Recep</label>
     <input type="radio" name="SelectedStaff" value="recep">
     </div>
    </div>
    
    <div class="btn-add-staff">
    <button class="btnAddStaff" type="submit" name="submit7">ADD</button>
    </div>
</div>

</div>
</form>
<div class="Table-content font3" style="border-radius:15px;background:white;width:82.5%;margin:50px 7.5%;padding-bottom:20px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Patients 
 </h3>
 
</div>
<table border=1 width="100%" >
<tr><th>ID</th><th>UNAME</th><th>EMAIL</th><th>PASSWORD</th><th>FNAME</th><th>LNAME</th><th>PHONE</th><th>DOB</th><th>GENDER</th><th>Edit</th><th>Delete</th></tr>
<?php
$count=0;
while($view=mysqli_fetch_assoc($result))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['UNAME']}</td>";
    echo"<td >{$view['EMAIL']}</td>";
    echo"<td>{$view['PASSWORD']}</td>";
    echo"<td>{$view['FNAME']}</td>";
    echo"<td>{$view['LNAME']}</td>";
    echo"<td>{$view['PHONE']}</td>";
    echo"<td>{$view['DOB']}</td>";
    echo"<td>{$view['GENDER']}</td>";
    
    echo"<td><a href='edit.php?id=".$view['ID']."'><button class='edit'>Edit</button></a></td>";
    echo"<td><a href='delete.php?id=".$view['ID']."'><button class='delete'>Delete</button></a></td></tr>";
   
    $count++;

}

echo"<script>
document.getElementById('numPatients').innerHTML= {$count};
console.log({$count});
</script>";
?>

</table>
</div>

<div class="Table-content font3 ambTable" style="border-radius:15px;background:white;width:82.5%;margin:50px 7.5%;padding-bottom:20px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Ambulance 
 </h3>
 
</div>
<table border=1 width="100%">
<tr><th>ID</th><th>NPLATE</th><th>MODELN</th><th>ENGINEN</th><th>Edit</th><th>Delete</th></tr>
<?php
$count1=0;
while($view=mysqli_fetch_assoc($result4))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['NPLATE']}</td>";
    echo"<td >{$view['MODELN']}</td>";
    echo"<td>{$view['ENGINEN']}</td>";
    
    
    echo"<td><a href='edit.php?id=".$view['ID']."'><button class='edit'>Edit</button></a></td>";
    echo"<td><a href='deleteAmb.php?id=".$view['ID']."'><button class='delete'>Delete</button></a></td></tr>";
   
    $count1++;

}

echo"<script>
document.getElementById('numAmb').innerHTML= {$count1};
console.log({$count1});
</script>";
?>

</table>
</div>

<div class="Table-content font3 staffTable" style="border-radius:15px;background:white;width:82.5%;margin:50px 7.5%;padding-bottom:20px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Staff 
 </h3>
 
</div>
<table border=1 width="100%">
<tr><th>ID</th><th>UNAME</th><th>FNAME</th><th>LNAME</th><th>GENDER</th><th>PASSWORD</th><th>DOB</th><th>BGROUP</th><th>PHONE</th><th>EMAIL</th><th>ADDRESS</th><th>SALARY</th><th>CATOGARY</th><th>Edit</th><th>Delete</th></tr>
<?php
$count2=0;
while($view=mysqli_fetch_assoc($result2))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['UNAME']}</td>";
    echo"<td>{$view['FNAME']}</td>";
    echo"<td>{$view['LNAME']}</td>";
    echo"<td>{$view['GENDER']}</td>";
    echo"<td>{$view['PASSWORD']}</td>";
    echo"<td>{$view['DOB']}</td>";
    echo"<td>{$view['BGROUP']}</td>";
    echo"<td>{$view['PHONE']}</td>";
    echo"<td >{$view['EMAIL']}</td>";
    echo"<td>{$view['ADDRESS']}</td>";
    echo"<td>{$view['SALARY']}</td>";
    echo"<td>{$view['CATOGARY']}</td>";
    
    
   
    echo"<td><a href='edit.php?id=".$view['ID']."'><button class='edit'>Edit</button></a></td>";
    echo"<td><a href='deleteStaff.php?id=".$view['ID']."'><button class='delete'>Delete</button></a></td></tr>";
   
    $count2++;

}

echo"<script>
document.getElementById('numStaff').innerHTML= {$count2};
console.log({$count});
</script>";
?>

</table>
</div>


<div class="Table-content font3 doctorTable" style="border-radius:15px;background:white;width:86%;margin:50px 5.8%;padding-bottom:20px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:30px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Doctors 
 </h3>
 
</div>
<table border=1 width="100%">
<tr><th>ID</th><th>UNAME</th><th>FNAME</th><th>LNAME</th><th>GENDER</th><th>PASSWORD</th><th>DOB</th><th>BGROUP</th><th>PHONE</th><th>ADDRESS</th><th>EMAIL</th><th>SALARY</th><th>SPECIALIZATION</th><th>Edit</th><th>Delete</th></tr>
<?php
$count3=0;
while($view=mysqli_fetch_assoc($result3))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['UNAME']}</td>";
    echo"<td>{$view['FNAME']}</td>";
    echo"<td>{$view['LNAME']}</td>";
    echo"<td>{$view['GENDER']}</td>";
    echo"<td>{$view['PASSWORD']}</td>";
    echo"<td>{$view['DOB']}</td>";
    echo"<td>{$view['BGROUP']}</td>";
    echo"<td>{$view['PHONE']}</td>";

    echo"<td>{$view['ADDRESS']}</td>";
      echo"<td >{$view['EMAIL']}</td>";  
      echo"<td>{$view['SALARY']}</td>";
    echo"<td>{$view['SPECIALIZATION']}</td>";
    
    
   
    echo"<td><a href='edit.php?id=".$view['ID']."'><button class='edit'>Edit</button></a></td>";
    echo"<td><a href='deleteDoc.php?id=".$view['ID']."'><button class='delete'>Delete</button></a></td></tr>";
   
    $count3++;

}

echo"<script>
document.getElementById('numDoctors').innerHTML= {$count3};
console.log({$count3});
</script>";
?>

</table>
</div>


</div>
</div>

<script type="text/javascript">
   
function showup()
{
  // console.log("Fatima ki khatir Ali");
  var f="<?php  echo'WWE';   ?>";
  
}
showup();

function doctor()
{

alert("<?php echo "Testing"; ?>");
document.getElementById('sel').innerHTML= "Doctor";
document.getElementById('doc').innerHTML= "<?php

     echo("------ID : <i>{$e_id}</i>");
     echo("<br>------User-Name : <i>{$e_uname}</i>");
     echo("<br>------First-Name : <i>{$e_fname}</i>");
     echo("<br>------Last-Name : <i>{$e_lname}</i>");
     echo("<br>------Password : <i>{$e_password}</i>");
     echo("<br>------Email : <i>{$e_email}</i>");
     echo("<br>------DOB : <i>{$e_dob}</i>");
     echo("<br>------Gender : <i>{$e_gender}</i>");
     echo("<br>------Phone : <i>{$e_phone}</i>");
     echo("<button  style='display:none'>Hard work</button>");
?>";

}
function staff()

{

alert("<?php echo "Testing"; ?>");
document.getElementById('sel').innerHTML= "Staff";
document.getElementById('doc').innerHTML= "<?php
//  include('connect.php'); 

//  $select ="select * from staff";
//  $result =mysqli_query($db_connection, $select);
//  session_start();    
//      $e_id="";
// $e_uname="";
// $e_email="";
// $e_password="";
// $e_phone="";
// $e_lname="";
// $e_fname="";
// $e_dob="";
// $e_gender="";
// $e_salary="";
// $e_spec="";
// $e_address="";
// $e_bgroup="";
// if(isset($_POST['staff']))
// {
	
// 	function clean_input($field)
// 	{
		
// 		$field= trim($field);
// 		$field= stripslashes($field);
// 		$field= htmlspecialchars($field);
		
// 		return $field;
		
		
// 	}
	
	
	
// 	$uname=clean_input($_POST['uname']);

	
	
	
// 			$login="select * from staff WHERE UNAME='".$uname."'";
// 			$result1=mysqli_query($db_connection, $login);
			
// 			if($data=mysqli_fetch_assoc($result1))
// 			{
				
// 				// $_SESSION['user']=$uname;                
//                 $e_id=$data['ID'];
//                 $e_uname=$data['UNAME'];
//                 $e_email=$data['EMAIL'];
//                 $e_password=$data['PASSWORD'];
//                 $e_phone=$data['PHONE'];
//                 $e_lname=$data['LNAME'];
//                 $e_fname=$data['FNAME'];
//                 $e_dob=$data['DOB'];
//                 $e_gender=$data['GENDER'];
//                 $e_spec=$data['CATOGARY'];
//                 $e_bgroup=$data['BGROUP'];
//                 $e_address=$data['ADDRESS'];
//                 $e_salary=$data['SALARY'];
//                 echo"Ali";
							
// 			}
			
// 			else
				
// 				{
					
// 					echo "please enter correct information user name and/or password";
					
// 				}
			
			
        
	
	
	
// }


//      echo("------ID : <i>{$e_id}</i>");
//      echo("<br>------User-Name : <i>{$e_uname}</i>");
//      echo("<br>------First-Name : <i>{$e_fname}</i>");
//      echo("<br>------Last-Name : <i>{$e_lname}</i>");
//      echo("<br>------Password : <i>{$e_password}</i>");
//      echo("<br>------Email : <i>{$e_email}</i>");
//      echo("<br>------DOB : <i>{$e_dob}</i>");
//      echo("<br>------Gender : <i>{$e_gender}</i>");
//      echo("<br>------Phone : <i>{$e_phone}</i>");
//      echo("<br>------Salary : <i>{$e_salary}</i>");
//      echo("<br>------Phone : <i>{$e_address}</i>");
//      echo("<br>------Phone : <i>{$e_bgroup}</i>");
//      echo("<br>------Phone : <i>{$e_spec}</i>");
//      echo("<button  style='display:none'>Hard work</button>");
// ?>";
// }
// function patient()
// {

// alert("<?php echo "Testing"; ?>");
// document.getElementById('sel').innerHTML= "Patient";
// document.getElementById('doc').innerHTML= "<?php

       

//      echo("------ID : <i>{$e_id}</i>");
//      echo("<br>------User-Name : <i>{$e_uname}</i>");
//      echo("<br>------First-Name : <i>{$e_fname}</i>");
//      echo("<br>------Last-Name : <i>{$e_lname}</i>");
//      echo("<br>------Password : <i>{$e_password}</i>");
//      echo("<br>------Email : <i>{$e_email}</i>");
//      echo("<br>------DOB : <i>{$e_dob}</i>");
//      echo("<br>------Gender : <i>{$e_gender}</i>");
//      echo("<br>------Phone : <i>{$e_phone}</i>");
//      echo("<button  style='display:none'>Hard work</button>");
// ?>";



}


</script>
</body>
</html>
