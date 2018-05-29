<?php
function matric_no_exists($matric_no) 
{
	global $conn;

	$sql = "SELECT id FROM member WHERE matric_no = '$matric_no'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}

function email_exists($email) 
{
	global $conn;

	$sql = "SELECT id FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}

function get_name($matric_no) {
	global $conn;

	$sql = "SELECT first_name FROM member WHERE matric_no = '$matric_no'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["first_name"];
}

function set_message($message) 
{
	if(!empty($message)){
		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message()
{
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}

function redirect($location){
	return header("Location: {$location}");
}

function validation_errors($error_message) 
{
$error_message = <<<DELIMITER

<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong>Warning!</strong> $error_message
 </div>
DELIMITER;

set_message($error_message);
}

function logged_in(){
	if(isset($_SESSION['matric_no']) || isset($_COOKIE['matric_no'])){
		return true;
	} else {
		return false;
	}
}

?>