<?php
	require_once(__DIR__ . "/../model/config.php"); //* Link to config.php
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path. "controller/create-post.php"; ?>"> <!--Echoes the variable "$path" and concatenates it with a string to create-post.php-->
	<div>
		<label for="title">Title: </label> <!--Sets the lable "title" for your post -->
		<input type="text" name="title"/>	<!--Makes a chat box thing for you to lable your title -->
	</div>

	<div>
		<label for="post">Post: </label> <!--Sets a lable "post" for your post-->
		<textarea name="post"> </textarea> <!--Adds chat box thing for your post WHICH ALSO EXPANDS! -->
	</div>

	<div>
		<button type="submit">Submit</button> <!--Makes a button!-->
	</div>
</form>