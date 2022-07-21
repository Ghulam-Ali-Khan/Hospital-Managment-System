 <?php
   
   include('connect.php');
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $no_plate=$_POST['no_plate'];
       $engine_no=$_POST['engine_no'];
       $model_no=$_POST['model_no'];

	   
	$insert_query="INSERT INTO ambulance(NPLATE,MODELN,ENGINEN) VALUES ('$no_plate','$model_no','$engine_no')";
	
	if(mysqli_query($db_connection, $insert_query))
	{
		header('location:admin.php');
	}
	else
	{
		
			echo"ERROR.............!!!";
		
	}

   }




?> 