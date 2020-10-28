<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game Dataset Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
	<h1>GAME&nbsp&nbspDATASET</h1>

	<br><br>

	<table>
		<tr>
			<th>Game Id</th>
			<th>Game Name</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "gameplanet");
		if ($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT gid, gname from games";
		$result = $conn-> query($sql);

		if ($result->num_rows>0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["gid"] ."</td><td>". $row["gname"] ."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}

		$conn-> close();
		?>

	</table>


</body>
</html>