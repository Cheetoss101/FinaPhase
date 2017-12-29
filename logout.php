<?php
	
	session_start();

	if(isset($_POST['logout']))
	{
		unset($_SESSTION['username']);
		echo "You loged out";
		header("Location:index.html");
	}
?>   

