<?php

session_start();


if(!isset($_SESSION['username'])){
	header('location:login.php');
}

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'gameplanet');


$name = $_SESSION['username'];
$id = $_POST['gameid'];
$vote = $_POST['likeordislike'];

$s = " select * from review where username = '$name' and gid = '$id'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<h3> You have already Voted for this Game !</h3>";
}else{
	if($vote == "upvote"){
		$reg = " insert into review (username, gid, upvote, downvote) values ('$name', '$id', 1, 0) ";
	}
	else{
		$reg = " insert into review (username, gid, upvote, downvote) values ('$name', '$id', 0, 1) ";
	}
mysqli_query($con, $reg);
header('location:review3.php');
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Review Confirmation Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>

<body>

	


</body>
</html>