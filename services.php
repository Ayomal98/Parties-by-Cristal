<html>
<head>
<?php Session_start();
		if (!$_SESSION['loggedin']) {
			header('Location: login.php');
			die();
		}
		?>
	<title>
		Services
	</title>
	<link rel="stylesheet" type="text/css" href="./css/navbar.css">
	<link rel="stylesheet" type="text/css" href="./css/srv.css">
</head>
<!--Lines editted: 26/01/20 : 11:00pm
		all box classes as in line 25 (style tag)
		the text inside <p> tags
-->
<body style="background:url(img/bg.jpg); background-size:100%">
	<div class="right">
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
			<img src="img/wedding.jpg" height="300" width=66%>
			<a href="order.php"><img id="book" src="img/book.png" height="300" width=18% align="right" style="margin-top:25;"> </a>
			<p>This is the biggest of the events we undertake<br \>
			This category contains weddings and wedding related parties of all kinds.<br />
			We prefer the order given at a year or prior!
			</p>
	</div>
	<div class="box2">
	<img src="img/birthday_party.jpg" height="300" width=66%>
			<a href="order.php"><img id="book" src="img/book.png" height="300" width=18%  align="right" style="margin-top:25;"  > </a>
			<p>Birthday party planning and suprise parties are included in this category<br \>
			You just have to do a few things as simple as specify the kind of location, number of poeple and a theme and leave the very rest to us!</p>
	</div>
	<div class="box">
			<img src="img/christmas.png" height="300" width=66%>
			<a href="order.php"><img id="book" src="img/book.png" height="300" width=18% align="right" style="margin-top:25;" ></a>
			<p>Isn't chtismas the busiest time of the year?<br \>
		Specify your party reqiurements and leave the rest to us!</p>
	</div>
	<div class="box2">
	<img src="img/dj.jpg" height="300" width=66%>
			<a href="order.php"><img id="book" src="img/book.png" height="300" width=18% align="right" style="margin-top:25;" ></a>
			<p>This vivid category contains all other kinds of parties<br \>
			May it be Halloween, graduation, bachelor, anniversary, DJ and karaoke parties or just a gathering with chill music, moves and good food!</p>
	</div>
</body>
</html>