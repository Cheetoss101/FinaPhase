<?php

	$link = mysqli_connect("localhost", "root", "","pixelpc");
	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error()); }
	
	if(mysqli_num_rows($res)>0)
	{
	$res = mysqli_query($link, "SELECT * FROM op");
	echo "<select>";
	while ($row= mysqli_fetch_assoc($res))
	{
		
		echo "<option>" . $row["name"] ."		". $row['price']. "</option>";
			
	}
	echo "</select>";
	}
?>

		  