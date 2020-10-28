<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Welcome Page </title>
	<link rel="stylesheet" type="text/css" href="style5.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
</head>

<body>

	<div class="container">

		<a class="float-right" href="logout.php"> HOME </a>
	
	<h1> Welcome <?php echo $_SESSION['username']; ?> !</h1>

	</div>

	<h2><br>Before you proceed&#8230</h2>

	<p><br>After you enter the main page, you will see numerous Games and their related data such as their name, modes, genre, platforms on which they run, etc., also you will also be happy to learn about the Developers or Companies behind creation, marketing or distribution of the games and learn of the info pertaining to them such as the directors, developers, programmer, writer, artists, composers, engine, etc. <br> By all this variety of data and information, the registered users can take benefit as they come to know about the games, and based upon their decision they can decide whether any game which they come across is worth playing or not. It will also be useful if any user wants to know whether he / she can play any game on his / her system or not, or if the game can be enjoyed to the fullest or not. So, basically, it would be of immense help to any Gamer! <br> But the most striking feature of this site is that we maintain a whole database of many many Games containing all possible data regarding that Game. Not only this, we have another facility for all the registered users to give reviews on any Game in the form of 'Up vote' or 'Down vote' which can be seen by the users themselves, which adds to the process of providing appropriate quality info about the popularity of any Game!</p>

	<h3><br>Do you want to continue ?</h3>

	<div class="align">
		<br><a href="main.php" class="button">Yes</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="login.php" class="button">No</a>
	</div>

	


</body>

</html>