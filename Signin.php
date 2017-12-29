<?php
	$link = mysqli_connect("localhost", "root", "","pixelpc");

	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error()); }

	
	$un = $_POST['username'];
	$pw = $_POST['password'];
	$sql = " SELECT * FROM user WHERE User= '$un' and Password= '$pw'  "; 
	$res = mysqli_query($link, $sql);

	if(mysqli_num_rows($res)>0)
	{
		$_SESSION['username'];
		 header("Location:items.php");
	}else
	{
		echo "Wrong UserName or Password";
	}
	mysqli_close($link);
?>   


