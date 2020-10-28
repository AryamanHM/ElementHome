<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Give Review | Game Planet</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>

<body>


	<h1>VIDEO&nbsp&nbspGAME&nbsp&nbspSTANDINGS</h1>

	<br><br>

	<h3>Given below are the Rankings of the Games based on the Gamers' Votes :</h3>

	<table>
		<tr>
			<th>Game Rank</th>
			<th>Game Id</th>
			<th>Game name</th>
			<th>Upvotes</th>
			<th>Downvotes</th>
		</tr>
		
		<?php
		$conn = mysqli_connect("localhost", "root", "", "gameplanet");
		if ($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT rank() over (order by sumup DESC, sumdown ASC) rank, games.gid, games.gname, SUM(review.upvote) sumup, SUM(review.downvote) sumdown from games, review where games.gid = review.gid group by games.gid having (sumup>=1 or sumdown>=1) order by sumup DESC, sumdown ASC";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["rank"] ."</td><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["sumup"] ."</td><td>". $row["sumdown"] ."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}

		$conn-> close();
		?>


	</table>

	<br>
	<h2 style="text-align: center">*** The Games are arranged based on their popularity among Gamers from top to bottom ***</h2>


</body>

</html>