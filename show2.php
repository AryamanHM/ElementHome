<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game Information Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>

<body>

	<h1>Television Shows&nbsp&nbspINFORMATION</h1>

	<br><br>

	<h3>The data you opted for your chosen Show is displayed below :</h3>



	<?php
			
			$conn = mysqli_connect("localhost", "root", "", "gameplanet");
			if ($conn-> connect_error) {
				die("Connection failed:". $conn-> connect_error);
			}

			
			$name = $_POST['showname'];
			$info = $_POST['showinfo'];
			
			
			if ($info == "title"){
				echo "<table>
						<tr>
							<th>Show Id</th>
							<th>Show name</th>
							
						</tr>";
				$sql = "Select sid, title from tv_show_dataset where sid = '$name'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "cast"){
				echo "<table>
						<tr>
							<th>Id</th>
							<th>Show name</th>
							<th>Cast</th>
						</tr>";
				$sql = "Select sid, title, cast from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["cast"] ."</td></tr>";				
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
							<th>Show Id</th>
							<th>Show name</th>
							<th>Country</th>
						</tr>";
				$sql = "Select sid, title, country from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["country"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "date"){
				echo "<table>
						<tr>
							<th>Show Id</th>
							<th>Show name</th>
							<th>Date</th>
							
						</tr>";
				$sql = "Select sid, title,date from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["date"]."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
else if ($info == "ryear"){
				echo "<table>
						<tr>
							<th>Show Id</th>
							<th>Show name</th>
							<th>Release Year</th>
						</tr>";
				$sql = "Select sid, title, ryear from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["ryear"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "rating"){
				echo "<table>
						<tr>
							<th>Show Id</th>
							<th>Show name</th>
							<th>Rating</th>
						</tr>";
				$sql = "Select sid, title, rating from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["rating"] ."</td></tr>";				
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
							<th>Show Id</th>
							<th>Show name</th>
							<th>Duration</th>
						</tr>";
				$sql = "Select sid, title, duration from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["duration"] ."</td></tr>";				
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
							<th>Show Id</th>
							<th>Show name</th>
							<th>Genre</th>
						</tr>";
				$sql = "Select sid, title, genre from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["genre"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
	else if ($info == "description"){
				echo "<table>
						<tr>
							<th>Show Id</th>
							<th>Show name</th>
							<th>Description</th>
						</tr>";
				$sql = "Select sid, title, description from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td><td>". $row["description"] ."</td></tr>";				
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
							<th>Show Id</th>
							<th>Show name</th>
							<th>Cast</th>
							<th>Country</th>
							<th>Date</th>
							<th>Release Year</th>
							<th>Rating</th>
							<th>Duration</th>
							<th>Genre</th>
							<th>Description</th>
							
						</tr>";
				$sql = "Select sid,title,cast,country,date,ryear,rating,duration,genre,description from tv_show_dataset where sid = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["sid"] ."</td><td>".$row["title"] ."</td><td>". $row["cast"] ."</td><td>". $row["country"] ."</td><td>". $row["date"] ."</td><td>".$row["ryear"]  ."</td><td>".$row["rating"] ."</td><td>".$row["duration"] ."</td><td>".$row["genre"] ."</td><td>".$row["description"] ."</td>";				
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
