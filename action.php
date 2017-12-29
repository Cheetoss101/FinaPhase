
<?php
	$link = mysqli_connect("localhost", "root", "","pixelpc");
	
	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error()); }

	$un = $_POST['username'];
	$pw = $_POST['password'];
	$email = $_POST['email'];
	$ad = $_POST['address'];
	$sql = " SELECT * FROM USER WHERE User= '$un' and Password= '$pw'  "; 
	$res = mysqli_query($link, $sql);
	if(mysqli_num_rows($res)>0)
	{
		 echo "You allready registered.";
		 //header("Location:createaccount");
	}else
	{
		 mysqli_query($link, " INSERT INTO USER (User, Password, Email, Address)
	VALUES('$un', '$pw', '$email', '$ad')");
	header("Location:items.html");
	}
	mysqli_close($link);
?>