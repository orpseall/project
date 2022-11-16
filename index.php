<?php
	// landing/index page
	session_start();

	$_SESSION;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHIMERA</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<!-- navbar -->
		<div class="logo">
			<img src="images/logo.svg">
		</div>
		<div clas="main">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="view/shop.php">Shop</a></li>
				<li><a href="view.cart.php">Cart</a></li>
				<li><a href="view.login.php">Login</a></li>
			</ul>
		</div>

		<!-- title and shop button -->
		<div class="title">
			<h3>WELCOME TO CHIMERA</h3>
			<h1>The Best Books for You</h1>
		</div>

		<div class="button">
			<a href="view/shop.php" class="btn">SHOP</a>
		</div>
	</header>
	
</body>
</html>

	