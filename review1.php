

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game Review Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>

<body>


	<h1>GAME&nbsp&nbsp&nbspREVIEW

	<br><br>

	<img src="image8.jpg" title="GAME REVIEW" class="center"></h1>

	<br><br>

	<h3>So, tell us about your experience...</h3>

	<h4>Did you enjoyed playing any Game ? <br> Was it really worth giving time and did it matched the standards which you were looking for ? <br> Were you expecting something better in it but couldn't find that anywhere in the Game ? <br> <strong>Are you satisfied with the Game ?</strong> <br> Would you want to recommend the Game to other aspiring Gamers or who don't know of it ? <br> Want to help others like you to make the appropriate decision ? <br> Then here is your chance to give your valuable Game Review !</h4>


	<br><br>


	<h4>If you're feeling positive about a Game then please give an UPVOTE..... Else give a DOWNVOTE.....</h4>

	<div>
  		<form action="review2.php" method="post">
    		<label for="gid" style="font-size: 25px ; font-family: Arial">Enter the Game Id of the Game which you want to Vote for</label>
    		<input type="text" id="gid" name="gameid" placeholder="Game Identification Number"><br>
  			
    		<p><label for="inspection" style="font-size: 30px ; font-family: Arial Black ; color: #00ffff">VOTE HERE</label><br><br>
    		<input type="radio" id="upvote" name="likeordislike" value="upvote">
  			<label for="upvote" style="font-size: 25px ; font-family: Arial">Upvote</label><br><br>
  			<input type="radio" id="downvote" name="likeordislike" value="downvote">
  			<label for="downvote" style="font-size: 25px ; font-family: Arial">Downvote</label><br></p>
  	

 



    <!--    <select id="inspection" name="likeordislike">
    			<option value="upvote">UPVOTE</option>
      			<option value="downvote">DOWNVOTE</option>
    		</select> 
    -->
    		
    		<input type="submit" value="VOTE">
  		</form>
	</div>

	


</body>
</html>

			