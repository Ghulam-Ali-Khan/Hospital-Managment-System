<?php

include('connection.php');
//session_start();

//destroying the session

session_destroy();
	
	if(!isset($_SESSION['user']))
	{
		
		header('location:Login As.php');
		
	}
	



?>