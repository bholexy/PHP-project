<?php
session_start();
 $myusername = $_SESSION['username'];
 $mypassword = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="myStyle.css">
	<title>Update My Profile</title>
</head>
<style type="text/css">
body {
    padding:100px ;
    background: linear-gradient(to right, #ff9900 , #ffdb4d);
}
</style>
<body>
<?php  
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "about_me";
            $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
                $sql = "SELECT * FROM profile WHERE username='".$myusername."' and password=$mypassword";
 				$result = $conn->query($sql);      
                    while($row = $result->fetch_assoc()) {
                        $name = $row["name"];
                        $username = $row["username"];
                        $password = $row["password"];
                        $work = $row["work"];
                        $website = $row["website"];
                        $bio = $row["bio"];
                        $skills = $row["skills"];
                        $education = $row["education"];
                    }
 ?> 

	<div class="form" style="text-align: left; width: 40%">
		<form method="POST" action="checkUpdate.php">
		<?php echo "$myusername"; ?><br/>
		<?php echo "$mypassword"; ?><br/>
			 <label>Name:</label><input type="text" name="name" value="<?php echo $name; ?>"></p>
			 <label>UserName:</label><input type="text" name="username" value="<?php echo $username; ?>"></p>
			 <label>Password:</label><input type="password" name="password" value="<?php echo $password;?>"></p>
			 <label>Work:</label><input type="text" name="work" value="<?php echo $work; ?>"></p>
			 <label>Website:</label><input type="text" name="website" value="<?php echo $website; ?>"></p>
			 <label>Bio Details</label><input type="text" name="bio" value="<?php echo $bio; ?>"></p>
			 <label>Skills:</label><input type="text" name="skills" value="<?php echo $skills; ?>"></p>
			 <label >Education</label><input type="text" name="education" value="<?php echo $education; ?>"></p>
			 <input type="submit" value="submit">
		</form>
	</div>


   
</body>
</html>