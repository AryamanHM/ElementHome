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
  		<form action="show2.php" method="post">
    		<label for="show">Fill the Show ID of your choice from the given options below</label>
    		<input type="text" id="show" name="showname" placeholder="Show Name">
  			
    		<label for="information">Type of information about the Show</label>
    		<select id="information" name="showinfo">
      			<option value="sid">Show id</option>
      			<option value="title">Title</option>
      			<option value="cast">Cast</option>
      			<option value="country">Country</option>
      			<option value="date">Date</option>
      			<option value="ryear">Release Year</option>
				<option value="rating">Rating</option>
				<option value="duration">Duration</option>
				<option value="genre">Genre</option>
				<option value="description">Description</option>
      			<option value="completeinfo">Complete information</option>
    		</select>

    		<input type="submit" value="Submit">
  		</form>
	</div>

	<br><br><br>

	

</body>
</html>