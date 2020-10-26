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
	<link rel="stylesheet" type="text/css" href="css/view.css">
	</head>
<body>
	<table border=1 padding=00px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>ID</td>
			<td>Name</td>
			<td>E-mail</td>
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
			<?php echo "<td><a href =update.php?id='".$row['id']."' > update </a> </td>"?>
			<?php echo "<td><a href =delete.php?id='".$row['id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="add.php"><button type="button">Add</button></a>

	
</body>
</html>

