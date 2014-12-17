<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);

	if($result) {
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='posts'>";
			echo "<h2>" . "<font color='white'>" . $row['title'] . "</font>" . "</h2>";
			echo "<br />";
			echo "<p>" . "<font color='white'>" . $row['post'] . "</font>" . "</h2>";
			echo "<br />";
			echo "</div>";
		}
	}
?>