<?php
if(isset($_POST['doc']))
{
    header('location:signinDoc.php');
}
if(isset($_POST['admin']))
{
    header('location:signinAdmin.php');
}
if(isset($_POST['recep']))
{
    header('location:signinStaff.php');
}
if(isset($_POST['patient']))
{
    header('location:signin.php');
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
</head>
<body>
<div class="heading">
    <h1 class="font2">Health Care</h1>
    <h2 class="font3">Login as</h2>
</div>
    <form action="Login As.php" method="post" enctype="multipart/form-data">
    <section class="container">
    
    <div class="s-container" id="admin">
    <img src="img/patient.png" alt="admin">
    <button name="patient" type="submit">
    Patient
    </button>
    </div>
    <div class="s-container" id="doctor">
    <img src="img/doctor1.png" alt="doctor">
    
    <button name="doc"  type="submit">
    Doctor
    </button>
    </div>
    <div class="s-container" id="receptionist">
    <img src="img/recep1.png" alt="receptionist">
    <button name="recep" type="submit">
    Receptionist
    </button>
    </div>
    <div class="s-container" id="admin">
    <img src="img/admin1.png" alt="admin">
    <button name="admin" type="submit">
    Admin
    </button>
    </div>
</section>
</form>
</body>
</html>