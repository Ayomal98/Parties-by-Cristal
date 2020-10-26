<html>
	<head>
		<title>homepage
		</title>
		<link rel="stylesheet" type="text/css" href="./css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<style>
			body {
				background-color: #000;
				background-image: url("./img/bg1.jpg");
				background-size: cover;
				background-position: top center;
				
			}			
			}
			
			<?php include 'footer.php';?>
			
			
		</style>
		<?php Session_start();
		if (!$_SESSION['loggedin']) {
			header('Location: login.php');
			die();
		}
		?>
	</head>
	<body>
	<div class="right">
		<img src="/project/img/logo.svg" width=90%>
		<h3>Arranging a party can be time consuming and reqire a lot to effort,
				quite hard to put up with your daily routing, yeah?
				<br>
				<br>
				<br>
					That's exactly why we are here!
					We are here to fully plan your party and make your party, 
					a paarty of a lifetime!
			<br>			
			<br>
			<br>	
				We are an online party arrangement system 
				that provides all the services when it comes to parties,
				including the bookings of hotels, packages, the food, the decorations and
				all other things according to your reqiurement.
			
			</h3>
	</div>
	<div>
		<ul>
			<li> <a href="HB.php"> Home</a> </li>
			<li><a href="services.php"> Services</a> </li>
			<li><a href="gallery.php"> Gallery</a> </li>
			<li><a href="ContactUs.php"> Contact us</a> </li>
			<li id="logout"><a href="logout.php?logout=1"> Log out </a> </li>
						
		</ul>
	</div>
	<div class=homebox>

			<video width=100% height="450px" controls autoplay >
				<source src="vid/intro.mp4" type="video/mp4">
			</video>
	
		
	<div class="foot">
		<a href="https://www.facebook.com"><img src="img/fb.png" width=40px height=40px></a>
		<a href="https://www.instagram.com/?hl=en"><img src="img/insta.png" width=60px height=40px></a>
		<a href="https://www.youtube.com/"><img src="img/youtube.png" width=50px height=40px></a>
		<a href="https://twitter.com/"><img src="img/twitter.png" width=40px height=40px></a>
	</div>	
	</div>
	
	
	
	
	
	</body>
	
	
</html>
