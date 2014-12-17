<?php
	require_once(__DIR__ . "/../model/config.php"); //* Link to config.php
	require_once(__DIR__ . "/../controller/login-verify.php");
?>
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
		<!--Echoes the variable "$path" and concatenates it with a string to post.php-->
	</ul>
</nav>