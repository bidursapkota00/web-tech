<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM notes WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$title = $resultData['title'];
$description = $resultData['description'];
echo $description;
?>

<html>

<head>
	<title>Edit Note</title>
</head>

<body>
	<h2>Edit Note</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form method="post" action="editAction.php">
		<label>Name: </label>
		<input type="text" name="title" value="<?php echo $title; ?>">
		<br><br>
		<label>Description: </label>
		<textarea name="description"><?php echo $description; ?></textarea>
		<br><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="update">
		</table>
	</form>
</body>

</html>