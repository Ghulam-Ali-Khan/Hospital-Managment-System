<?php
include('connect.php');
$d_id=$_GET['id'];
$delete="delete from appointment WHERE id='$d_id'";
if(mysqli_query($db_connection, $delete))
{
    header('location:DoctorsDashboard.php');
}
?>