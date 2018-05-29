<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<?php include('dbcon.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">

<body>


<?php

	if (isset($_POST["submit"])) {
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if ($check !==false) {
			$image = $_FILES['image']['tmp_name'];
			$imgContent = addslashes(file_get_contents($image));
			$imgContent = base64_encode($imgContent);
				
				$insert = $conn->query("UPDATE results SET image='$imgContent' WHERE id=1");
					if ($insert) {
						echo "success";
						}else{
							echo "failed";
						}
						# code...
					
		}
	}

?>

</body>
</html>