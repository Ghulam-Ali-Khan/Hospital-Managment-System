<?php

include('connect.php');

session_start();

if(isset($_POST['submit']))
{
	
	function clean_input($field)
	{
		
		$field= trim($field);
		$field= stripslashes($field);
		$field= htmlspecialchars($field);
		
		return $field;
		
		
	}
	
	
	
	$login_uname=clean_input($_POST['login_uname']);
	$login_pass=clean_input($_POST['login_password']);
	

	if(!empty($login_uname) || !empty($login_pass))
	{
		// if(!preg_match("/^[a-zA-Z-']*$/", $login_name) && !preg_match("/^[a-zA-Z-']*$/", $login_pass))
		// {
			$login="select * from recep WHERE UNAME='".$login_uname."' and PASSWORD='".$login_pass."'";
			$result=mysqli_query($db_connection, $login);
			
			if(mysqli_fetch_assoc($result))
			{
				
				$_SESSION['user']=$login_uname;
				header('location:recep.php');
				
			}
			
			else
				
				{
					
					echo "please enter correct information user name and/or password";
					
				}
			
			
			
		// }
		
		// else
			
		// 	{
		// 		echo "please enter characters in between a-z and A-Z";
				
				
		// 	}
		
		
	}
	
	else
		
		{
			
			echo "Please enter your username and password";
			
		}
	
	
	
}


if(!empty($_POST['remember']))
{
	
	setcookie ("login_uname", $_POST['login_uname'], time()+ 3600*24);
	setcookie ("login_password", $_POST['login_password'], time()+ 3600*24);
	
	
	
	
	
}

else
	
{
	setcookie ("login_uname", "");
	setcookie ("login_password", "");
	
	echo"Cookies not set successfully";
	
	
	
}

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icon1.png">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/utilis.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
</head>
<body>

    <div class="container1">
       
       <div class="nameHead font2" id="name-head">
         <h1 class="head">Health Care</h1>
       </div>
       <h2 class="H2head font4">
       Sign in.
       </h2>
<form method="post" action="signinStaff.php" class="font4" enctype="multipart/form-data">
<div>
<label for="name">User-Name</label>
<input type="text" name="login_uname" placeholder="i.e..abc123" value="<?php if(isset($_COOKIE["login_uname"])) {echo $_COOKIE["login_uname"];}?>">
</div>
<div>
<label for="name">Password</label>
<input type="password" name="login_password" placeholder="i.e..*****" value="<?php if(isset($_COOKIE["login_password"])) {echo $_COOKIE["login_password"];}?>">
</div>
<input type="checkbox" name="remember">Remember me
<button type="submit" name="submit">Login</button>


</form>


     </div>

</body>
</html>