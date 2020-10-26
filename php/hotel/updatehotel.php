<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['hotel_no'])){
$sql1 = "SELECT * FROM hotel WHERE hotel_no =".$_GET['hotel_no'];
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
	$sql2 = "UPDATE hotel SET h_name = '".$_POST['hname']."',location = '".$_POST['loc']."' WHERE hotel_no ='".$_POST['hotel_no']."'";
	$result2 = mysqli_query($connection,$sql2);

	$sql3 = "SELECT * FROM hotel WHERE hotel_no =".$_POST['hotel_no'];
	$result3 = mysqli_query($connection,$sql3);
	$row=mysqli_fetch_assoc($result3);
	echo"<script> alert('Updated Sucessfully') </script>";

}
// if(!isset($_GET['hotel_no'])&&!isset($_POST['submit'])){
// header("Location: viewuser.php");
// }


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
            <td>location</td>

		</tr>
		<form action='updatehotel.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='h_name' required value =".$row['hotel_no']." readonly></td>";
            echo "<td><input type = 'text' name='loc' required value =".$row['location']."></td>";
            ?>
		    </tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='submit'></td>
			<td colspan =3><a href="viewhotel.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>