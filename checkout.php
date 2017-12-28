<?php

	$link = mysqli_connect("localhost", "root", "","pixelpc");
	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error()); }
?>

<?php

	session_start();
	$sql = "SELECT * FROM op WHERE name ='" . $un . "'";
	$res = $link->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        ?>
	        <table>
	        	<tr>
	        		<td><?php $row["img"]?></td>
	        		<td><?php $row["op"]?></td>
	        		<td><?php $row["cpu"]?></td>
	        		<td><?php $row["ram"]?></td>
	        		<td><?php $row["mb"]?></td>
	        		<td><?php $row["price"]?></td>
	        	</tr>
	        </table>
	        <?php
	    }
		header("Location:index.html");
	} else {
	    echo "<p>You dont have any item.</p>";
	}
	$link->close();



?>   

