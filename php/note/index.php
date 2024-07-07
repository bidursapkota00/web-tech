<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM notes ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%'>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $res['title'] . "</td>";
			echo "<td>" . $res['description'] . "</td>";
			echo "<td>";
			echo "<a href='edit.php?id=" . $res['id'] . "'>Edit</a>";
			echo " | ";
			echo "<a href='delete.php?id=" . $res['id'] . "' onClick='return del();'>Delete</a>";
			echo "</td>";
		}
		?>
	</table>
	<script>
		function del() {
			const confirmation = confirm("Are you sure to delete?");
			return confirmation;
		}
	</script>
</body>

</html>