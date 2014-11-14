<?php
	require_once(__DIR__ . "/../model/config.php"); //* Links to Database.php

	$connection = new mysqli($host, $username, $password, $database); //* Sets up variables

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //* Recieves Title Input
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //* Recieves Post Input

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); //* Inserts new records into a table

	if($query) {
		echo "<p>Successfully inserted post: $title</p>"; //* If query is working, it will echo that it successfully inserted the post and the name of the title
	}

	else{
		echo "<p>$connection->error</p>"; //* If query ISN'T working then it will echo the error
	}

	$connection->close(); //*Closes Connection 
?>