<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:register.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Intermediate Register Status Page </title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
</head>

<body>

	<div class="container">

		<a class="float-right" href="logout.php"> HOME </a>
	
	<h1> Registration done successfully!!! <?php echo $_SESSION['username']; ?> </h1>

	</div>

</body>

</html>