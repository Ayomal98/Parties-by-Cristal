<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM feedback";
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
<?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: ../login.php');
			die();
		}
		?>	
	<title></title>
	<?php include("navbar.php");?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	</head>
<body>
	<table border=1 padding=00px>
		<tr style="background-color: rgba(85, 62, 79, 0.6);">
			<td>Name</td>
			<td>E-mail</td>
			<td>Telephone</td>
			<td>Feedback</td>
	

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['mail'] ?></td>
			<td><?php echo $row['phone'] ?></td>
			<td><?php echo $row['feedback'] ?></td>
		</tr>
		<?php
	}
	?>
		
	</table>

	
</body>
</html>

