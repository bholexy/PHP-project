<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$email		= $_POST['email'];
	$password	= md5($_POST['password']);

	$sql = "SELECT email, password, full_name FROM lecturer WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		if (isset($_POST['remember'])) {
			setcookie('email', $email, time() + 86400);
		}

		while($row = $result->fetch_assoc()) {
				$full_name = $row["full_name"];

		}

		$_SESSION['email'] = $email;
		$_SESSION['full_name'] = $full_name;


		echo "/n" . $_SESSION['full_name'];
		



		redirect("admin.php");
		exit;
	} else {
		set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Wrong username or password.</p></div>');
	}
}
?>