<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$matric_no		= $_POST['matric_no'];
	$password	= md5($_POST['password']);

	$sql = "SELECT matric_no, password FROM member WHERE matric_no = '$matric_no' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		if (isset($_POST['remember'])) {
			setcookie('matric_no', $matric_no, time() + 86400);
		}

		$_SESSION['matric_no'] = $matric_no;

		redirect("schedule.php");
		exit;
	} else {
		set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Wrong username or password.</p></div>');
	}
}
?>