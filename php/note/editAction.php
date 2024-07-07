<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$title = mysqli_real_escape_string($mysqli, $_POST['title']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);

	// Check for empty fields
	if (empty($title) || empty($description)) {
		if (empty($title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}

		if (empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE notes SET `title` = '$title', `description` = '$description' WHERE `id` = $id");

		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
