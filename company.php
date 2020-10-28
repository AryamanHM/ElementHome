<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Company Details Selection Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>

	<h1>COMPANY&nbsp&nbsp&nbspDETAILS&nbsp&nbsp&nbspSELECTION</h1>

	<br><br>

	<h3>Do you want to know about the Company details of any Game ?</h3>



	<div>
  		<form action="company2.php" method="post">
    		<label for="gid">Enter the Game Id to learn more about its Company details</label>
    		<input type="text" id="gid" name="gameid" placeholder="Game Identification Number">
  			
    		<label for="information">Type of information about the Game Company</label>
    		<select id="information" name="companyinfo">
    			<option value="companyname">Company name</option>
      			<option value="composer">Composer</option>
      			<option value="artist">Artist</option>
      			<option value="writer">Writer</option>
      			<option value="programmer">Programmer</option>
      			<option value="developer">Developer</option>
      			<option value="engine">Engine</option>
      			<option value="director">Director</option>
    		</select>

    		<input type="submit" value="Proceed">
  		</form>
	</div>

	<br><br><br><br>


</body>

</html>