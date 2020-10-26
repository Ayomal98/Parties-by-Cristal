<?php require_once('conect.php'); ?>
<html>
<head>
    <title> Order</title>
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./css/order.css">
    <?php Session_start();
		if (!$_SESSION['loggedin']) {
			header('Location: login.php');
			die();
		}
		?>
</head>
<body style="background:url(img/bg3.jpg); background-size:100%">
<!-- -->
<?php
    if(isset($_POST['submit'])){
        //echo "user submitted";
        $user_name = $_POST['C_Name'];
        $address = $_POST['Address'];
        $seats = $_POST['Seats'];
        $hotel = $_POST['Hotel'];
        $contact = $_POST['contact'];
        $feed = $_POST['feed'];


    $sql = "        INSERT INTO order_user (`C_Name`, `Add`, `Estimated_seats`, `hotel`, `Contact_no`, `Other`)
                    VALUES ('".$user_name."','".$address."','".$seats."','".$hotel."','".$contact."','".$feed."')       ";

    $result=mysqli_query($connection,$sql);
    if($result){
        echo "<script>alert('Successfully Inserted!')</script>";
    }
    }
    ?>


<div class="right">
		    <img src="/project/img/logo.svg"  width=90%>
		    <h3>We are an online party arrangement service</h3>
 </div>
	<div class="nav">
    <ul>
			<li> <a href="HB.php"> Home</a> </li>
			<li><a href="services.php"> Services</a> </li>
			<li><a href="gallery.php"> Gallery</a> </li>
			<li><a href="ContactUs.php"> Contact us</a> </li>
			<li><a href="logout.php"> Log out </a> </li>
						
		</ul>
<div class="box">
    <div class="head">
        <h1>Book Now</h1>
    </div> 
    <form action="" method="POST"> 
    <fieldset>
    <div class="textbox">
        Customer Name:<br /> <input type="text" required size="60" name="C_Name" placeholder="Input Customer name here" >
        <br />
    </div>
    <br />
    <div class="textbox">
        Address: <br /><input type="text" required size="100" name="Address" placeholder="Input Address here">
    </div>
    <div class="textbox">
        Estimated seats:
        <input type="textbox" required size="10" name="Seats" placeholder="00">
        Prefered hotel:
        <select name="Hotel" name="hotel">
            <option selected hidden value="">Select Hotel</option>
            <option value="Galadari">Galadari</option>
            <option value="Shangrila"> Shangri la</option>
            <option value="Blue shappire"> Blue shappire</option>
            <option value="Silver Ray"> Silver Ray</option>
        </select>
    </div> 
    <div class="textbox">
        Contact No: <br /><input type="text" required size="10" name="contact" placeholder="07x-xxxxxxx">
    </div>
    <div class="textbox">
        Other Notes: <br /><input type="textarea" size="100" name="feed" placeholder="Type your special notes here">
    </div>
    <br />
        <input class="btn" type="submit" required name="submit" value="Book Now">
    </fieldset>
    </form>
</div>
         
</body>
</html>
