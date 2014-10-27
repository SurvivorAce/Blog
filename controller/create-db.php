<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	//* If the connection fails state the the error.
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	$exists = $connection->select_db($database);

	if (!$exists) {
		$query = $connection->query("CREATE DATABASE $database");

		if ($query) {
			echo "Successfully created database: " . $database;
		}
	}

	else {
		echo "Database already exists";
	}

	$connection->close();

?>