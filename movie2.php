<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game Information Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>

<body>

	<h1>GAME&nbsp&nbspINFORMATION</h1>

	<br><br>

	<h3>The data you opted for your chosen Movie is displayed below :</h3>



	<?php
			
			$conn = mysqli_connect("localhost", "root", "", "gameplanet");
			if ($conn-> connect_error) {
				die("Connection failed:". $conn-> connect_error);
			}

			
			$name = $_POST['moviename'];
			$info = $_POST['movieinfo'];
			
			
			if ($info == "color"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Color</th>
						</tr>";
				$sql = "Select id, movie, color from mdataset where id = '$name'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["color"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "director"){
				echo "<table>
						<tr>
							<th>Id</th>
							<th>Movie name</th>
							<th>Director</th>
						</tr>";
				$sql = "Select id, movie, director from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["director"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "duration"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Duration)</th>
						</tr>";
				$sql = "Select id, movie, duration from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["duration"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "actors"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Actors</th>
							
						</tr>";
				$sql = "Select id, movie, actor1, actor2, actor3 from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["actor1"] ." ,". $row["actor2"]." ,". $row["actor3"]."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
else if ($info == "genre"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Genre</th>
						</tr>";
				$sql = "Select id, movie, genre from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["genre"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "language"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Language</th>
						</tr>";
				$sql = "Select id, movie, language from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["language"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "country"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Country</th>
						</tr>";
				$sql = "Select id, movie, country from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["country"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "content"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Content</th>
						</tr>";
				$sql = "Select id, movie, content from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["content"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "budget"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Budget</th>
						</tr>";
				$sql = "Select id, movie, budget from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["budget"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "year"){
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Year</th>
						</tr>";
				$sql = "Select id, movie, year from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>". $row["movie"] ."</td><td>". $row["year"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
			else {
				echo "<table>
						<tr>
							<th>Movie Id</th>
							<th>Movie name</th>
							<th>Color</th>
							<th>Director</th>
							<th>Duration</th>
							<th>Actors</th>
							<th>Genre</th>
							<th>Language</th>
							<th>Country</th>
							<th>Content</th>
							<th>Budget</th>
							<th>Year</th>
						</tr>";
				$sql = "Select id,movie,color,director,duration,actor1,actor2,actor3,genre,language,country,content,budget,year from mdataset where id = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["id"] ."</td><td>".$row["movie"] ."</td><td>". $row["color"] ."</td><td>". $row["director"] ."</td><td>". $row["duration"] ."</td><td>".$row["actor1"] .",".$row["actor2"] .",".$row["actor3"] ."</td><td>".$row["genre"] ."</td><td>".$row["language"] ."</td><td>".$row["country"] ."</td><td>".$row["content"] ."</td><td>".$row["budget"] ."</td><td>".$row["year"] ."</td>";				
					}
				echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			
			$conn-> close();
		?>



</body>
</html>
