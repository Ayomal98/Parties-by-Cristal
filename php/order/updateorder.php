<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['Id'])){
$sql1 = "SELECT * FROM order_user WHERE Id =".$_GET['Id'];
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
	$sql2 = "UPDATE order_user SET C_Name = '".$_POST['uname']."',Add = '".$_POST['add']."',Estimated_seats = '".$_POST['Seats']."',hotel = '".$_POST['Hotel']."',Contact_no = '".$_POST['Cont']."',Other = '".$_POST['feed']."' WHERE Id ='".$_POST['Id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM order_user WHERE Id =".$_POST['Id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['Id'])&&!isset($_POST['submit'])){
header("Location: vieworder.php");
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
            <td>Address</td>
            <td>Seats</td>
            <td>Hotel</td>
            <td>Contact_No</td>

		</tr>
		<form action="" method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='Id' required value =".$row['Id']." readonly></td>";
			echo "<td><input type = 'text' name='uname' required value =".$row['C_Name']."></td>";
            echo "<td><input type = 'text' name='add' required value =".$row['Add']."></td>";
            echo "<td><input type = 'text' name='Seats' required value =".$row['Estimated_seats']."></td>";
            echo "<td><input type = 'text' name='Hotel' required value =".$row['hotel']."></td>";
            echo "<td><input type = 'text' name='Cont' required value =".$row['Contact_no']."></td>";
            echo "<td><input type = 'text' name='feed' required value =".$row['Other']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='submit'></td>
			<td colspan =3><a href="vieworder.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>