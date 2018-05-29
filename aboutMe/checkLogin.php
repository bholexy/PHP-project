<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
    <title>Checking Login</title>
</head>
    
<body>
<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "about_me";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
                
        $username=$_POST['username'];
        $password=$_POST['password'];
        echo $_POST['username'];


$sql="SELECT * FROM profile WHERE username='$username' and password='$password'";
 $result = $conn->query($sql);    

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>=1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header("location:profile.php?username=$username");
}
else {
echo '<form action="login.php" method="post" >';
echo "<div align='center'><font size='5' color='#ff9900'> Wrong Username or Password</div>";
echo "<div align='center' ><input type='submit' name='back' value='Back'></div>";
echo '</form>';
}

?>

</body>
</html>
