<?php include("includes/init.php");
	session_destroy();

	if(isset($_COOKIE['matricNo'])) {
		unset($_COOKIE['matricNo']);

		setcookie('matricNo', '', time()-86400);
	}

redirect("login.php");
?>