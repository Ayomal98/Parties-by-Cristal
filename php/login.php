<?php

include ('conect.php');
session_start();

if (isset($_POST['login'])) {
	
    $username= $_POST['username'];
	$password= $_POST['password'];

	$query = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";
	

	$result = $connection->query($query);
	$data = $result->fetch_assoc();

 	if ($result->num_rows > 0 && $data['Role']=="Admin") {
		 $_SESSION['loggedin_admin'] = 2;
		 print_r($data['Role']);
		 header("location:admin_Home.php");
	}
    if ($result->num_rows > 0 && $data['Role']=="user") {
		$_SESSION['loggedin'] = 1;
		header("location:HB.php");
	}
			
	else{
		echo '<p class="error">User name and password not matched</p>';
	}
				
	}
 
?>

<html>

<head>
   <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
<form method="post" action="" name="signin-form">
    <div class="form-element">
		<label id="lb">Username</label>
		<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label id="lb">Password</label>
        <input type="password" name="password" required />
    </div>
	<button type="submit" name="login" value="login">Log In</button>
	</form>
	<h3>Don,t You have an account? <br />Register using below!</h3><br />
	<a href="register.php"><button name="sign" value="Register">Register</button></a>


</body>

</html>