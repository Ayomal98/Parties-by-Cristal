<?php require_once('conect.php'); ?>

<html>
<html>
<head>
    <?php include("navbar.php");?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	<title></title>
    <?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: ../login.php');
			die();
		}
		?>
</head>
<body>
<br>
	
<br>
<br>
Order Form
	<table >
	<form action="" method ='POST'>
		<tr>
			<td>Name</td>
			<td><input type = 'text' name='uname' required></td>
		</tr>
		
		<tr>
			<td>Address</td>
			<td><input type = 'text' name='add' required></td>
        </tr>
        <tr>
            <td>Seats</td>
            <td><input type = 'text' name='seat' required></td>
        </tr>
        <tr>
            <td>Contact No</td>
            <td><input type = 'text' name='cont' required></td>
        </tr>
        <tr>
            <td>Hotel</td>
            <td><input type = 'text' name='hotel' required></td>
        </tr>
        <tr>
            <td>Feedback</td>
            <td><input type = 'text' name='feed'></td>
        </tr>
		<tr>
		
			<td colspan =3 ><input type='submit' value="Save" name='submit'></td>
		</tr>
		
		<tr>
			<td colspan =3><a href="vieworder.php"><button type="button">view</button></a></td>
		</tr>
		
	</form>
	</table>
	
	
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        //echo "user submitted";
        $user_name = $_POST['uname'];
        $add = $_POST['add'];
        $seat = $_POST['seat'];
        $hotel = $_POST['hotel'];
        $cont = $_POST['cont'];
        $feed = $_POST['feed'];



    $sql = "INSERT INTO order_user (`C_Name`, `Add` , `Estimated_seats` , `hotel` , `Contact_no` , `Other`) VALUES ('".$user_name."','".$add."','".$seat."','".$hotel."','".$cont."','".$feed."')";  
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "<script>alert('Successfully Insert!')</script>";
    }
    }else{
        //echo "failed";
    }
    ?>

