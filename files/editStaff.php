<?php
include('connect.php');
$e_id=$_GET['id'];
$select="select * from staff WHERE id='$e_id'";
$result =mysqli_query($db_connection, $select);

$data=mysqli_fetch_assoc($result);
$e_id=$data['ID'];
$e_uname=$data['UNAME'];
$e_email=$data['EMAIL'];
$e_password=$data['PASSWORD'];
$e_lname=$data['LNAME'];
$e_fname=$data['FNAME'];
$e_dob=$data['DOB'];
$e_phone=$data['PHONE'];
$e_gender=$data['GENDER'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icon1.png">
    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/utilis.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
</head>
<body>
    <div class="container2">
       
       <div class="nameHead font2" id="name-head">
         <h1 class="head">Health Care</h1>
       </div>
       <h2 class="H2head font4">
       Edit
       </h2>

     <div class="Form font4" id="Form">
     <form action="update.php" enctype="multipart/form-data" method="post" class="Form-style">
     <div class="inputs">
     <div class="row1">
     <div>
     <label for="name">ID</label>
     <input type="text" name="id" placeholder="" value="<?php echo($e_id); ?>" >
     </div>
     <div>
     <label for="name">Gender</label>
     <input type="text" name="gender" placeholder="" value="<?php echo($e_gender); ?>">
     </div>
     </div>
     
	 <div class="row1">
     <div>
     <label for="name">First Name</label>
     <input type="text" name="fname" placeholder="i.e..Zain" onfocus="borderFocus()" value="<?php echo($e_fname); ?>">
     </div>
     <div>
     <label for="name">Last Name</label>
     <input type="text" name="lname" placeholder="i.e..Ali" value="<?php echo($e_lname); ?>">
     </div>
     </div>
     <div class="row2">
     <div>
     <label for="name">User-Name</label>
     <input type="text" name="uname" placeholder="i.e..Ali123" value="<?php echo($e_uname); ?>">
     </div>
     <div>
     <label for="name">Password</label>
     <input type="password" name="password" placeholder="i.e..abc786" value="<?php echo($e_password); ?>">
     </div>
    </div>
    <div class="row3"> 
    <div>
     <label for="name">Phone</label>
     <input type="text" name="phone" placeholder="i.e..03********" value="<?php echo($e_phone); ?>">
     </div>
     <div>
     <label for="name">Email</label>
     <input type="email" name="email" placeholder="i.e..abc@gmail.com" value="<?php echo($e_email); ?>">
     </div>
      </div>
     </div>

    


     
     <label for="start" id="lab1">DOB</label>
     <input type="date" id="start1" name="dob" class="font4" value="<?php echo($e_dob); ?>" name="trip-start"
       value="2020-04-08"
       min="1900-01-01" max="2021-12-31">

   

     <button type="submit" class="btn-update font4">Update</button>
     </form>
     </div>
    </div>

</body>
</html>