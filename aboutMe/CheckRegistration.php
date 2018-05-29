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
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $work = $_POST["work"];
        $website = $_POST["website"];
        $bio = $_POST["bio"];
        $skills = $_POST["skills"];
        $education = $_POST["education"];
          $sql = "INSERT INTO profile (name, username, email, password, work, website, bio, skills, education)
          VALUES ('$name', '$username', '$email', '$password', '$work', '$website', '$bio', '$skills', '$education')";
            if ($conn->query($sql) == TRUE) {
                echo '<form action="profile.php" method="post" >';
                echo "<div align='center'><font size='5' color='#ff9900'> Registration successfull</div>";
                echo "<div align='center' ><input type='submit' name='My Profile Page' value='My Profile Page'></div>";
                echo '</form>';
            } else
                echo '<form action="login.php" method="post" >';
                echo "<div align='center'><font size='5' color='#ff9900'> Error Registering</div>";
                echo "<div align='center' ><input type='submit' name='back' value='Back'></div>";
                echo '</form>';
          
      }
      $conn->close();
  ?> 


</body>
</html>
