<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM hotel";
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
			<td>H_ID</td>
			<td>Name</td>
			<td>location</td>
			<td>Update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['hotel_no'] ?></td>
			<td><?php echo $row['h_name'] ?></td>
			<td><?php echo $row['location'] ?></td>
			<td><a href="updatehotel.php?hotel_no=<?php echo $row['hotel_no'] ?>">update</a></td>
			<td><a href="deletehotel.php?hotel_no=<?php echo $row['hotel_no'] ?>">delete</a></td>
		
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="addhotel.php"><button type="button">Add</button></a>

	
</body>
</html>
