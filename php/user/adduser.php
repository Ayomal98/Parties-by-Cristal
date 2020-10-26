<?php require_once('conect.php'); ?>

<html>
<html>
<head>
	<?php include("navbar.php");?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	<?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: ../login.php');
			die();
		}
		?>
	<title></title>
</head>
<body>
<br>
	
<br>
<br>
	User Form
	<table >
	<form action="" method ='POST'>
		<tr>
			<td>Name</td>
			<td><input type = 'text' name='uname' required></td>
		</tr>
		
		<tr>
			<td>Password</td>
			<td><input type = 'text' name='pass' required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type = 'text' name='mail' required></td>
        </tr>
		<tr>
			<td>User type</td>
			<td><select name="user">
            <option selected hidden value="">Select User</option>
            <option value="user">user</option>
			<option value="Admin">Admin</option>
        </select>
		</td>
		</tr>
		
			<td colspan =3 ><input type='submit' value="Save" name='submit'></td>
		</tr>
		
		<tr>
			<td colspan =3><a href="viewuser.php"><button type="button">view</button></a></td>
		</tr>
		
	</form>
	</table>
	
	
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        //echo "user submitted";
        $user_name = $_POST['uname'];
        $pass = $_POST['pass'];
		$mail = $_POST['mail'];
		$type = $_POST['user'];

		$sql = "INSERT INTO users (`username`, `password`, `email`, `Role`) VALUES ('".$user_name."','".$pass."','".$mail."','".$type."')";  
		$result=mysqli_query($connection,$sql);
		if($result){
			echo "<script>alert('Successfully Insert!')</script>";
		}
    }else{
        //echo "failed";
    }
    ?>

