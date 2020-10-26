<?php	require_once('conect.php');
?>

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
			<td><input type = 'text' name='hname' required></td>
		</tr>
		
		<tr>
			<td>location</td>
			<td><input type = 'text' name='loc' required></td>
        </tr>
		<tr>
		
			<td colspan =3 ><input type='submit' value="Save" name='submit'></td>
		</tr>
		
		<tr>
			<td colspan =3><a href="viewhotel.php"><button type="button">view</button></a></td>
		</tr>
		
	</form>
	</table>
	
	
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        //echo "user submitted";
        $hotel_name = $_POST['hname'];
        $loc = $_POST['loc'];


    $sql = "INSERT INTO hotel (`h_name`, `location`) VALUES ('".$hotel_name."','".$loc."')";  
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "<script>alert('Successfully Insert!')</script>";
    }
    }else{
        //echo "failed";
    }
    ?>

