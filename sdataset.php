<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movie Dataset Page</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
	<h1>Movie&nbsp&nbspDATASET</h1>

	<br><br>

	<table>
		<tr>
			<th>Movie Id</th>
			<th>Movie Name</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "gameplanet");
		if ($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT sid,title from tv_show_dataset;";
		$result = $conn-> query($sql);

		if ($result->num_rows>0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["sid"] ."</td><td>". $row["title"] ."</td></tr>";
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