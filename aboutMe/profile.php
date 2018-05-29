<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="myStyle.css">
<title>User Details</title>
<style>
body {
    padding:100px ;
    background: linear-gradient(to right, #ff9900 , #ffdb4d);
</style>
</head>
<body>
    <div>
    <img src="Boluwatife.jpg">
    <?php  
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "about_me";
            $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
                $sql = "SELECT * FROM profile WHERE name_id=7";     
                $result = $conn->query($sql);      
                    while($row = $result->fetch_assoc()) {
                        $name = $row["name"];
                        $work = $row["work"];
                        $website = $row["website"];
                        $bio = $row["bio"];
                        $skills = $row["skills"];
                        $education = $row["education"];
                      }
    ?>                   
            <h1><?php echo $name; ?></h1>
            <p style="font-weight:bold;"><?php echo $work; ?></p>
            <button>Visit my company's website</button>
            <p><?php echo $bio; ?></p>
            <p style="color: grey;"><?php echo $skills; ?></p>
            <p style="font-weight: bold;">Education</p>
            <p><?php echo $education; ?></p>
        </div>
</body>
</html>