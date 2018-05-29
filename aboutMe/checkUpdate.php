<?php
session_start();
 $myusername = $_SESSION['username'];
 $mypassword = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<head>
    <title> Checking Updates</title>
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
            $password = $_POST["password"];
            $work = $_POST["work"];
            $website = $_POST["website"];
            $bio = $_POST["bio"];
            $skills = $_POST["skills"];
            $education = $_POST["education"];
        }

           /* $sql = "INSERT INTO * WHERE username='$myusername' and password='$mypassword'
            VALUES ('$name', '$username', '$work', '$website', '$bio', '$skills', '$education')";
            }
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "myError: " . $sql . "<br>" . $conn->error;
            }*/

echo "$work";

            $sql = "UPDATE profile 
            SET name = '$name',
                username='$username'
            WHERE username='$myusername' and password='$mypassword';";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            echo "$name";
?>


</body>
</html>