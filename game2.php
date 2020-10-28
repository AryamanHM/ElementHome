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

	<h3>The data you opted for your chosen Game is displayed below :</h3>



	<?php
			
			$conn = mysqli_connect("localhost", "root", "", "gameplanet");
			if ($conn-> connect_error) {
				die("Connection failed:". $conn-> connect_error);
			}

			
			$name = $_POST['gamename'];
			$info = $_POST['gameinfo'];
			
			
			if ($info == "genre"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Genre(s)</th>
						</tr>";
				$sql = "Select gid, gname, genre from games where gname = '$name'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["genre"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "mode"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Mode(s)</th>
						</tr>";
				$sql = "Select gid, gname, mode from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["mode"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "platform"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Platform(s)</th>
						</tr>";
				$sql = "Select gid, gname, platform from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["platform"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "genreandmode"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Genre(s)</th>
							<th>Mode(s)</th>
						</tr>";
				$sql = "Select gid, gname, genre, mode from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["genre"] ."</td><td>". $row["mode"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "genreandplatform"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Genre(s)</th>
							<th>Platform(s)</th>
						</tr>";
				$sql = "Select gid, gname, genre, platform from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["genre"] ."</td><td>". $row["platform"] ."</td></tr>";		
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "modeandplatform"){
				echo "<table>
						<tr>
							<th>Game Id</th>
							<th>Game name</th>
							<th>Mode(s)</th>
							<th>Platform(s)</th>
						</tr>";
				$sql = "Select gid, gname, mode, platform from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td><td>". $row["mode"] ."</td><td>". $row["platform"] ."</td></tr>";
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
							<th>Game Id</th>
							<th>Game name</th>
							<th>Genre(s)</th>
							<th>Mode(s)</th>
							<th>Platform(s)</th>
						</tr>";
				$sql = "Select gid, gname, genre, mode, platform from games where gname = '$name'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["gid"] ."</td><td>".$row["gname"] ."</td><td>". $row["genre"] ."</td><td>". $row["mode"] ."</td><td>". $row["platform"] ."</td></tr>";				
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





		