<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	//*  Checks for an error. If the connection fails it is told to DIE.
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	$exists = $connection->select_db($database);
	//* If connection exists it'll run query.
	if (!$exists) {
		//* Query asks if there is a connection to the database. If not it'll create a database.
		$query = $connection->query("CREATE DATABASE $database");

		if ($query) {
			//* Echoes text if a database is created.
			echo "Successfully created database: " . $database;
		}
	}

	else {
		//* Echoes text if database already exists.
		echo "Database already exists";
	}

	//* Creates a Table.							
	$query = $connection->query("CREATE TABLE posts (" . "id  int(11) NOT NULL AUTO_INCREMENT");



	//* Closes connection.
	$connection->close();

?>