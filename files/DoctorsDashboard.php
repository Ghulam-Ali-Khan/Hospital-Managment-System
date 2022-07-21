<?php
error_reporting(0); 
include('connect.php');

$select ="select * from appointment ORDER BY APPOINTMENT ASC;";
$result =mysqli_query($db_connection, $select);





$e_id=$_GET['id'];
$select1="select * from appointment WHERE id='$e_id'";
$result1 =mysqli_query($db_connection, $select1);

$data=mysqli_fetch_assoc($result1);

$e_Fname=$data['FNAME'];
$e_Age=$data['AGE'];
$e_Phone=$data['PHONE'];
$e_Gender=$data['GENDER'];



// $delete="delete from appointment WHERE id='$d_id'";
// if(mysqli_query($db_connection, $delete))
// {
//     header('location:DoctorsDashboard.php');
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon1.png">
    <link rel="stylesheet" href="css/utilis.css">
    <link rel="stylesheet" href="css/Ddashboard.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
<style>
body
{
    overflow-x: hidden;
}
tr:hover
{

    background:#05a4fa;
    color: white;
}
tr button
{

}
.done
{
    padding:5px 10px;
    background:#05a4fa;
    color:white;
    border-radius:3px;
    font-size:15px;
    margin:5px 20px;
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
.btn
{
    padding:10px 20px;
    background:#05ad1c;
    color:white;
    font-size:20px;
    border-radius:5px;
    border:2px solid black;
}
.btn:hover
{
    background:#05a4fa;
}
body
{
    background:#d6d4d0;
}
.D-dashboard
{

    width: 100%;
    display: flex;
    height:100%;

}
.dash-items,.main-menu,.D-dashboard
{
    background: url(img/bg17.jpg);
    background-size:cover;   
}
.dash-items
{
    width: 101%;
    display: flex;
}
.logitout
{
    position:absolute;
    left:90%;
    top:5px;
    background:#05ad1c;
    color:white;
    border:2px solid black;
    border-radius:3px;
    font-size:20px;
    padding:5px 10px;

}
.logitout:hover
{
    font-weight:bold;
}
</style>
</head>
<body>
    <div class="D-dashboard" id="D-dashboard">
        
        <div class="main-menu">
            <div class="dash-head">
                <h2 class="font7">
                    Dashboard
                </h2>
              
            </div>
            <form action="logout.php" method="post" enctype="multipart/form-data">
            <button class="logitout">Logout</button>
            </form>
            
            <div class="dash-items">
            <div class="left-col">
            <div class="name-head">
                <h2 class="font7">
                    Ghulam Ali
                </h2>
                <p class="font5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, cupiditate?
                </p>
            </div>
            
            <div class="blocks">
                <div class="block">
                    <div class="pic-count">
                    <img src="img/appointment.png" alt="appointment">
                    <h2 class="font7" id="rem">1000</h2>
                    </div>
                    <h3 class="font4">Appointments Remaining</h3>
                </div>
                <div class="block">
                    <div class="pic-count">
                    <img src="img/attendence1.png" alt="appointmentsDone">
                    <h2 class="font7">770</h2>
                    </div>
                    <h3 class="font4">Appointments Done</h3>
                </div>
                <div class="block">
                    <div class="pic-count">
                    <img src="img/attendance.png" alt="attendance">
                    <h2 class="font7">3</h2>
                    </div>
                    <h3 class="font4">Absenties</h3>
                </div>
            </div>
        
            
            <div class="Table-content font3" style="border-radius:15px;background:white;width:97%;margin:70px 3%;padding-bottom:10px">
<div class="add-account font4" id="addAccount" style="color:white;font-size:20px;height:50px;width:100%;background:#05a4fa;border-top-left-radius:15px;border-top-right-radius:15px">
 <h3 style="padding-left:10px">
 Appointments 
 </h3>
 
</div>
<table border=1 width="100%">
<tr><th>ID</th><th>FNAME</th><th>PHONE</th><th>GENDER</th><th>TREATMENT</th><th>APPOINTMENT</th><th>AGE</th><th>Grant</th><th>Cancel</th><th>Done</th></tr>
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
    echo"<td><a href='DoctorsDashboard.php?id=".$view['ID']."'><button class='edit'>Grand</button></a></td>";
    echo"<td><a href='deleteP.php?id=".$view['ID']."'><button class='delete'>Cancel</button></a></td>";
    echo"<td><a href='deleteP.php?id=".$view['ID']."'><button class='done'>Done</button></a></td></tr>";

    $count++;

}

echo"<script>
document.getElementById('rem').innerHTML= {$count};
console.log({$count});
</script>";
?>
</table>
</div>




        </div>
          <div class="right-col">
            <div class="time font7">
              <h2 id="time" onload="showTime()">564</h2>
            </div>
            <div class="prescription font3"  style="display:flex;flex-direction:column;width:95%;margin:0% 2.5%;align-items:center;justify-content:center">
                <h2 class="font2" id="prescription">
                    Prescription
                </h2>
            <label for="name">Patient</label> 
            <input type="text" name="pat_name" id="pat_name"  value="<?php echo($e_Fname); ?>" style="height:25px;border-radius:5px;padding:5px;margin:10px 0%;" placeholder="Enter">
            <label for="name">Age</label> 
            <input type="text" name="pat_name" id="pat_age"   value="<?php echo($e_Age); ?>" style="height:25px;border-radius:5px;padding:5px;margin:10px 0%;" placeholder="Enter">
            <label for="name">Gender</label> 
            <input type="text" name="pat_gender" id="pat_gender"  value="<?php echo($e_Gender); ?>" style="height:25px;border-radius:5px;padding:5px;margin:10px 0%;" placeholder="Enter">
            <label for="name">Prescription</label>

             <textarea id="pres" name="pres" rows="10" cols="30" style="border-radius:5px;margin:20px 0%;">
             </textarea>
            
            <button class="btn" onclick="print()" >
                Print
            </button>

            </div>
               
          </div>
    
        </div>
        </div>

    </div>


    <script src="js/Ddashboard.js"></script>
</body>
</html>