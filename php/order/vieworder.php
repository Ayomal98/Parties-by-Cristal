<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM order_user";
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
            <td>Address</td>
            <td>Seats</td>
            <td>Hotel</td>
            <td>Contact</td>
            <td>feedback</td>
			<td>Update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['Id'] ?></td>
			<td><?php echo $row['C_Name'] ?></td>
            <td><?php echo $row['Add'] ?></td>
            <td><?php echo $row['Estimated_seats'] ?></td>
            <td><?php echo $row['hotel'] ?></td>
            <td><?php echo $row['Contact_no'] ?></td>
            <td><?php echo $row['Other'] ?></td>
			<?php echo "<td><a href = updateorder.php?Id='".$row['Id']."' > update </a> </td>"?>
			<?php echo "<td><a href = deleteorder.php?Id='".$row['Id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="addorder.php"><button type="button">Add</button></a>

	
</body>
</html>

