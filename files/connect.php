<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="hmssignup";

$db_connection =mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if($db_connection)
{
    
    echo"<script>
          console.log('Hi');
    </script>";
}
else
{
    echo"Not connection succeccesfully".mysqli_connect_error();
}
?>
