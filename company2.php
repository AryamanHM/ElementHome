<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Company Information Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
	<h1>COMPANY&nbsp&nbsp&nbspDETAILS</h1>

	<br><br>

	<h3>The Company details you opted for your chosen Game is displayed below :</h3>



	<?php
			
			$conn = mysqli_connect("localhost", "root", "", "gameplanet");
			if ($conn-> connect_error) {
				die("Connection failed:". $conn-> connect_error);
			}

			
			$id = $_POST['gameid'];
			$info = $_POST['companyinfo'];
			
			
			if ($info == "companyname"){
				echo "<table>
						<tr>
							<th>Company name</th>
						</tr>";
				$sql = "Select cname from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["cname"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "composer"){
				echo "<table>
						<tr>
							<th>Composer(s)</th>
						</tr>";
				$sql = "Select composer from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["composer"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "artist"){
				echo "<table>
						<tr>
							<th>Artist(s)</th>
						</tr>";
				$sql = "Select artist from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["artist"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "writer"){
				echo "<table>
						<tr>
							<th>Writer(s)</th>
						</tr>";
				$sql = "Select writer from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["writer"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "programmer"){
				echo "<table>
						<tr>
							<th>Programmer(s)</th>
						</tr>";
				$sql = "Select programmer from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["programmer"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "developer"){
				echo "<table>
						<tr>
							<th>Developer(s)</th>
						</tr>";
				$sql = "Select developer from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["developer"] ."</td></tr>";				
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}

			else if ($info == "engine"){
				echo "<table>
						<tr>
							<th>Engine</th>
						</tr>";
				$sql = "Select engine from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["engine"] ."</td></tr>";				
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
							<th>Director(s)</th>
						</tr>";
				$sql = "Select director from company where gid = '$id'";
				$result = $conn-> query($sql);
				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["director"] ."</td></tr>";				
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