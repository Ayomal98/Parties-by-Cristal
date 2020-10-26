<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql1 = "SELECT * FROM users WHERE id =".$_GET['id'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['submit'])){
	$sql2 = "UPDATE users SET username = '".$_POST['uname']."',password = '".$_POST['pass']."' WHERE id ='".$_POST['id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM users WHERE id =".$_POST['id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['id'])&&!isset($_POST['submit'])){
header("Location: viewuser.php");
}


?>
<html>
<html>
<head>
<?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: ../login.php');
			die();
		}
		?>	
<?php include("navbar.php");?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	<title></title>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
            <td>Password</td>
            <td>E-mail</td>

		</tr>
		<form action='updateuser.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='id' required value =".$row['id']." readonly></td>";
			echo "<td><input type = 'text' name='uname' required value =".$row['username']."></td>";
            echo "<td><input type = 'text' name='pass' required value =".$row['password']."></td>";
            echo "<td><input type = 'text' name='mail' required value =".$row['email']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='submit'></td>
			<td colspan =3><a href="viewuser.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>