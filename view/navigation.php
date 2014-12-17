<?php
	require_once(__DIR__ . "/../model/config.php"); //* Link to config.php
	require_once(__DIR__ . "/../controller/login-verify.php");
?>
<div class="fluid-container">
	<div class="row">
		<div class="col-xs-12">
			<nav>
				<ul>
					<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form </a></li>
					<!--Echoes the variable "$path" and concatenates it with a string to post.php-->
					<li><a href="<?php echo $path . "register.php" ?>">Register </a></li>
					<li><a href="<?php echo $path . "login.php" ?>">Login </a></li>
					<li><a href="<?php echo $path . "logout.php" ?>">Logout </a></li>
				</ul>
			</nav>
		</div>	
	</div>
</div>