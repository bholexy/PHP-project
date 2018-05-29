
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<title>User Registration</title>
</head>

<body>
	
	<div class="form" id="login" style="text-align: left; width: 40%; visibility: inherit;">
		<form action = "checkLogin.php" method = "post">
            <label for="skills">UserName:</label><input type = "text" name = "username"  required autofocus></br>
            <label for="education">PassWord:</label><input type = "password" name = "password" required>
            <input type="submit" value="login" name="login">
         </form>
    </div>



         <button type="button"
onclick="document.getElementById('login').innerHTML = 'Hello JavaScript!'">
Click Me!</button>
<p id="demo"></p>
<p id="demo1">obrigado</p>

<script>
    var x = "5" + 2 + 3;
    var carName = "Volvo";
    document.getElementById("demo").innerHTML = carName;
    //document.getElementById("demo1").innerHTML = x;
</script>

</body>
</html>