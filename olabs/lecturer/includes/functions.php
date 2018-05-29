<?php
function full_name_exists($full_name) 
{
	global $conn;

	$sql = "SELECT id FROM lecturer WHERE full_name = '$full_name'";

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

	$sql = "SELECT id FROM lecturer WHERE email = '$email'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}

function get_name($email) {
	global $conn;

	$sql = "SELECT full_name FROM lecturer WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["full_name"];
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
	if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
		return true;
	} else {
		return false;
	}
}

?>