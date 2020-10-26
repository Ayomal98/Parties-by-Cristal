<?php require_once('conect.php'); ?>
<html>
	<head>
		<title>Contact Us </title>
		
		<link rel="stylesheet" type="text/css" href="./css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./css/order.css">
	</head>
	
	<body style="background:url(img/contact.jpg); background-size:100%">
		<?php
    	if(isset($_POST['submit'])){
        //echo "user submitted";
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $phone = $_POST['contact'];
        $feedback = $_POST['feed'];


    	$sql = "INSERT INTO feedback (`name`, `mail`, `phone`, `feedback`) VALUES ('".$name."','".$email."','".$phone."','".$feedback."')";  
    	$result=mysqli_query($connection,$sql);
    	if($result){
        echo "<script>alert('WE REPORTED YOUR FEEDBACK!')</script>";
    }
    }
    ?>

    <div class="right">		
		<img src="img/evt7.jpg" width="300px" height="200px"><br />
		<img src="img/evt8.jpg" width="300px" height="200px"><br />
		<img src="img/evt9.jpg" width="300px" height="200px"><br />
	</div>
	<div class="nav">
    <ul>
			<li> <a href="HB.php"> Home</a> </li>
			<li><a href="services.php"> Services</a> </li>
			<li><a href="gallery.php"> Gallery</a> </li>
			<li><a href="ContactUs.php">Contact Us</a> </li>
			<li><a href="logout.php"> Log out </a> </li>
						
		</ul>
<div class="box">
    <div class="head">
        <h1>Contact Us</h1>
    </div> 
    <form action="" method="POST"> 
    <fieldset>
    <div class="textbox">
        Customer Name:<br /> <input type="text" required size="60" name="name" placeholder="Input Customer name here" >
        <br />
    </div>
    <br />
    <div class="textbox">
        Email Address:
        <input type="Email" name="Email" placeholder="Email">
    </div> 
    <div class="textbox">
        Contact No: <br /><input type="text" required size="10" name="contact" placeholder="07x-xxxxxxx">
    </div>
    <div class="textbox">
        Feedback: <br /><input type="textarea" size="100" name="feed" placeholder="Give Your Valuable Feedback here">
    </div>
    <br />
        <input class="btn" type="submit" required name="submit" value="Send">
    </fieldset>
    </form>
</div>
         
</body>
</html>

