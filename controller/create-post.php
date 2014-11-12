<?php
	require_once(__DIR__ . "/../model/database.php"); //* Links to Database.php

	$connection = new mysqli($host, $username, $password, $database); //* Sets up variables

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //* Recieves Title Input
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //* Recieves Post Input


	echo "<p>Title: $title</p>"; //* Echoes Title Input
	echo "<p>Post: $post</p>"; //* Echoes Post Input

	$connection->close(); //*Closes Connection
?>