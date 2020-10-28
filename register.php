<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>

<div class="container">
	<div class="register-box">
	<div class="row">
	<div class="col-md-12 login-right">
		<h2> Register Here </h2>
		<form action="register2.php" method="post">
			<div class="form-group">
				<label>Fname</label>
				<input type="text" name="fname" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Lname</label>
				<input type="text" name="lname" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Date of Birth</label>
				<input type="date" name="dob" class="form-control" required>
				</div>
			<div class="form-group">
				<label for="gender">Gender</label>
    				<select id="gender" name="gender">
      				<option value="m">Male</option>
      				<option value="f">Female</option>
      				<option value="o">Others</option>
    				</select>
				</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Register </button>
			</form>
		</div>

		</div>

	
	</div>



</div>
</body>
</html>
