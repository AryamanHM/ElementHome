<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movie Details Selection Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
	<h1>GAME&nbsp&nbspDETAILS&nbsp&nbspSELECTION</h1>

	<br><br>

	<h3>Do you want to know about the  details of any Movie ?</h3>


	<div>
  		<form action="movie2.php" method="post">
    		<label for="movie">Fill the Movie ID of your choice from the given options below</label>
    		<input type="text" id="movie" name="moviename" placeholder="Movie Name">
  			
    		<label for="information">Type of information about the Movie</label>
    		<select id="information" name="movieinfo">
      			<option value="color">Color</option>
      			<option value="director">Director</option>
      			<option value="duration">Film Duration</option>
      			<option value="actors">Actors</option>
      			<option value="genre">Genre</option>
      			<option value="language">Language</option>
				<option value="country">Country</option>
				<option value="content">Content Rating</option>
				<option value="budget">Budget</option>
				<option value="year">Year</option>
      			<option value="completeinfo">Complete information</option>
    		</select>

    		<input type="submit" value="Submit">
  		</form>
	</div>

	<br><br><br>

	

</body>
</html>