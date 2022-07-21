<?php

include('connect.php'); 

$select ="select * from signupdata";
$result =mysqli_query($db_connection, $select);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border=1 width="100%">
<tr><th>ID</th><th>UNAME</th><th>EMAIL</th><th>PASSWORD</th><th>FNAME</th><th>LNAME</th><th>PHONE</th><th>DOB</th><th>GENDER</th><th>Edit</th><th>Delete</th></tr>
<?php
while($view=mysqli_fetch_assoc($result))
{
    echo"<tr><td>{$view['ID']}</td>";
    echo"<td>{$view['UNAME']}</td>";
    echo"<td>{$view['EMAIL']}</td>";
    echo"<td>{$view['PASSWORD']}</td>";
    echo"<td>{$view['FNAME']}</td>";
    echo"<td>{$view['LNAME']}</td>";
    echo"<td>{$view['PHONE']}</td>";
    echo"<td>{$view['DOB']}</td>";
    echo"<td>{$view['GENDER']}</td>";
    echo"<td><a href='edit.php?id=".$view['ID']."'><button>Edit</button></a></td>";
    echo"<td><a href='delete.php?id=".$view['ID']."'><button>Delete</button></a></td></tr>";


}
?>
</table>

</body>
</html>