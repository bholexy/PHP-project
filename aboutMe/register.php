<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="myStyle.css">
	<title>User Registration</title>
</head>
<style type="text/css">

</style>
<body class="main">

<?php

?>
	<div class="form" style="text-align: left; width: 40%">
		<form method="POST" action="checkRegistration.php">
			 <label for="name">Name: </label><input type="text" name="name" required autofocus></p>
			 <label for="username">Username: </label><input type="text" name="username" required></p>
			 <label for="email">Email: </label><input type="text" name="email" required></p>
			 <label for="password1">Password:</label><input type="password" name="password" required></p>
			 <label for="work">Work:</label><input type="text" name="work"></p>
			 <label for="website">Website:</label><input type="text" name="website"></p>
			 <label for="bio">Bio Details</label><input type="text" name="bio"></p>
			 <label for="image">Upload Your Picture:</label><input type="file" name="file"></p>
			 <label for="skills">Skills:</label><input type="text" name="skills"></p>
			 <label for="education">Education</label><input type="text" name="education"></p>
			 <input type="submit" value="submit">
		</form>
	</div>

	

</body>
</html>