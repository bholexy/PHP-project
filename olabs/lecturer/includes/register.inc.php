
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$full_name				= $_POST['full_name'];
	$email					= $_POST['email'];
	$password				= md5($_POST['password']);
	$confirm_password		= $_POST['confirm_password'];
	
	$errors = [];

	if (email_exists($email)){		
		$errors[] = "$email is already registered.";
	}

	if (!empty($errors)) {
		foreach ($errors as $error) {
			validation_errors($error);
		}
	}else{
		$sql = "INSERT INTO lecturer (full_name, email, password, date_added)
		VALUES ('$full_name',  '$email', '$password', now())";

		if ($conn->query($sql) === TRUE) {

			$_SESSION["full_name"] = $full_name;
			redirect("index.php");
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
		}
	}

?>