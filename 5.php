<?php 
	$link = mysqli_connect("localhost", "root", "","pixelpc");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PIXEL PC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keyword" content=" personal computer, PC, Website, webpage, Abbod, Alwaal">
	<meta name="description" content=" This website is Abbod Alwaal personal webpage">
</head>

<body>
	<div id="Header">
				<h1 id="logo"><a id="a" href="index.html"> PIXEL PC </a></h1>
		<ul id="head">
			<li id="headerinfo"><a id="a" href="items.html">OurCollection</a></li>
			<li id="headerinfo"><a id="a" href="#C4">ContactUs</a></li>
			<li id="headerinfo"><a id="a" href="index.html">SignOut</a></li>
		</ul>

		<a id="C1"></a>
	</div>
	<br><br><br><br><br><br>
	<div id="BG">
        <br><br><br><br><br><br>
        <progress value="66.6" max="100"></progress>
        <img src="images/5.png"/>
        <br><br><br><br><br><br>
       <p>Operating System</p>
        <form method="post" action="">
        <?php
			$res = mysqli_query($link, "SELECT * FROM op");
			echo "<select>";
			while ($row= mysqli_fetch_array($res))
			{
				echo "<option>"; echo  $row["name"]." (".$row["price"] .") $"; echo "</option>";		
			}echo "</select>";
		?>
		</form>
        <p>CPU</p>
        <form method="post" action="">
        <?php
			$res = mysqli_query($link, "SELECT * FROM cpu");
			echo "<select>";
			while ($row= mysqli_fetch_array($res))
			{
				echo "<option>"; echo  $row["name"]." (".$row["price"] .") $"; echo "</option>";		
			}echo "</select>";
		?>
		</form>
        <p>Motherboard</p>
        <form method="post" action="">
        <?php
			$res = mysqli_query($link, "SELECT * FROM mb");
			echo "<select>";
			while ($row= mysqli_fetch_array($res))
			{
				echo "<option>"; echo  $row["name"]." (".$row["price"] .") $"; echo "</option>";		
			}echo "</select>";
		?>
		</form>
         <p>RAM/System</p>
         <form method="post" action="">
        <?php
			$res = mysqli_query($link, "SELECT * FROM ram");
			echo "<select>";
			while ($row= mysqli_fetch_array($res))
			{
				echo "<option>"; echo  $row["name"]." (".$row["price"] .") $"; echo "</option>";		
			}echo "</select>";
		?>
		</form>
        <br><br><br><br>
        
        <button name="submit" type="subimt">Submit</button>
    </div>

	<div id="Footer">
		<h1 style="color: #fff; text-align: left">Contact Us</h1>
		<hr/>		
		<br><br>	
		<a style ="font-size:35px" href="https://cheetoss101.github.io/PersonalWeb.github.io/">Abbod Alwaal </a>
		
		<a style ="font-size:35px" href="https://sronova.github.io">Abdulrhman Saraweq </a>	
	</div>
</body>

</html>