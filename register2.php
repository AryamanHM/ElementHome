<?php
	

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'gameplanet');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " select * from users where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username Already Taken";
}else{
	$reg = " insert into users (fname, lname, dob, gender, username, password, email) values ('$fname', '$lname', '$dob', '$gender' ,'$name', '$pass', '$email')";
	mysqli_query($con, $reg);
	$_SESSION['username'] = $name;
	header('location:register3.php');
}

?>




