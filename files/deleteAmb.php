<?php
include('connect.php');
$d_id=$_GET['id'];
$delete="delete from ambulance WHERE id='$d_id'";
if(mysqli_query($db_connection, $delete))
{
    header('location:admin.php');
}
?>