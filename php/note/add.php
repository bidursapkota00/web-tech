<html>

<head>
	<title>Add Notes</title>
</head>

<body>
	<h2>Add Notes</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post">
		<label for="title">Title: </label>
		<input type="text" name="title">
		<br><br>
		<label for="description">Description: </label>
		<textarea name="description" id="description"></textarea>
		<br><br>
		<input type="submit" name="submit">
	</form>
</body>

</html>