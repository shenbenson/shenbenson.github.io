<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="css/navBar.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="icon" type="image/png" href="res/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif|Raleway" rel="stylesheet">
		<title>Benson's Profile</title>
	</head>
	<body>
		<div id="pageContainer">
			<h1>Welcome to Carey's Computers</h1>
			<p><i>Discover the best technologies</i> &nbsp;-&nbsp; Current Time: 
			<?php 
				date_default_timezone_set("America/Toronto"); 
				echo date("h:i A, M d,Y");  
				$connection->close();
			?>
			</p>
			<a href="/shop.php?search=&order=nameAZ"><button class="button">Start Shopping</button></a>
		</div>
	</body>
</html>
