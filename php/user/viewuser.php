<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM users";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}
?>

<head>
	
	<title></title>
	<?php include("navbar.php");?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	<?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: ../login.php');
			die();
		}
		?>
	</head>
<body>
	<table border=1 padding=00px>
		<tr style="background-color: rgba(85, 62, 79, 0.6);">
			<td>ID</td>
			<td>Name</td>
			<td>E-mail</td>
			<td>Role</td>
			<td>Update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['Role'] ?></td>
			<?php echo "<td><a href =updateuser.php?id='".$row['id']."' > update </a> </td>"?>
			<?php echo "<td><a href =deleteuser.php?id='".$row['id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="adduser.php"><button type="button">Add</button></a>

	
</body>
</html>

