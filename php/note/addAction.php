<html>

<head>
	<title>Add Notes</title>
</head>

<body>
	<?php
	// Include the database connection file
	require_once("dbConnection.php");
	if (isset($_POST['submit'])) {
		// Escape special characters in string for use in SQL statement	
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

			// Show link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// If all the fields are filled (not empty) 

			// Insert data into database
			$result = mysqli_query($mysqli, "INSERT INTO notes (`title`, `description`) VALUES ('$title', '$description')");

			// Display success message
			echo "<p><font color='green'>Data added successfully!</p>";
			echo "<a href='index.php'>View Result</a>";
		}
	}
	?>
</body>

</html>