<?php
	if(isset($POST(['s1'])) && isset($POST(['s2'])) && isset($POST(['s3'])) && isset($POST(['s4']))){	
	session_start();
	$link = mysqli_connect("localhost", "root", "","pixelpc");
	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error()); }
	
	$select1 = $_POST['s1'];
	$select2 = $_POST['s2'];
	$select3 = $_POST['s3'];
	$select4 = $_POST['s4'];
	$img = $_POST['img_pc'];
	$price = 0;

	$sql1 = "SELECT price FROM op WHERE name ='" . $select1 . "'";
	$sql2 = "SELECT price FROM cpu WHERE name ='" . $select2 . "'";
	$sql3 = "SELECT price FROM ram WHERE name ='" . $select3 . "'";
	$sql4 = "SELECT price FROM mb WHERE name ='" . $select4 . "'";

	$res1 = mysqli_query($link, $sql1);
	$res2 = mysqli_query($link, $sql2);
	$res3 = mysqli_query($link, $sql3);
	$res4 = mysqli_query($link, $sql4);

	
	while($row= mysqli_fetch_array($res1))
	{$price1 = (int) $row['price'];}
	while($row= mysqli_fetch_array($res2))
	{$price2 = (int) $row['price'];}
	while($row= mysqli_fetch_array($res3))
	{$price3 = (int) $row['price'];}
	while($row= mysqli_fetch_array($res4))
	{$price4 = (int) $row['price'];}
	

	echo $price4 + $price3 + $price2 + $price1;

	mysqli_query($link, "INSERT INTO pc ( User, op, cpu, ram, mb, price, img)
						 VALUES ('$un', '$select1', '$select2', '$select3', '$select4', $price, '$img')");
						 header("Location:checkout.html");
	}
	else{
		echo "zg";
	}

?>   
