<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game Details Selection Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
	<h1>GAME&nbsp&nbspDETAILS&nbsp&nbspSELECTION</h1>

	<br><br>

	<h3>Do you want to know about the Game details of any Game ?</h3>


	<div>
  		<form action="game2.php" method="post">
    		<label for="gname">Select the Game of your choice from the given options below</label>
    		<input type="text" id="gname" name="gamename" placeholder="Game Name">
  			
    		<label for="information">Type of information about the Game</label>
    		<select id="information" name="gameinfo">
      			<option value="genre">Genre</option>
      			<option value="mode">Mode</option>
      			<option value="platform">Platform</option>
      			<option value="genreandmode">Genre and Mode</option>
      			<option value="genreandplatform">Genre and Platform</option>
      			<option value="modeandplatform">Mode and Platform</option>
      			<option value="completeinfo">Complete information</option>
    		</select>

    		<input type="submit" value="Submit">
  		</form>
	</div>

	<br><br><br>

	

</body>
</html>