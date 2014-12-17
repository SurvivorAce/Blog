
	<?php 
		//* Will check if the file is included. If so it will not require it again.
		require_once(__DIR__ . "/controller/login-verify.php"); 
		require_once(__DIR__ . "/view/header.php");
		if (authenticateUser()) {
			require_once(__DIR__ . "/view/navigation.php");			
		}
		require_once(__DIR__ . "/view/navigation.php");
		require_once(__DIR__ . "/controller/create-db.php");
		require_once(__DIR__ . "/controller/read-posts.php");
		require_once(__DIR__ . "/view/footer.php");
	?>




