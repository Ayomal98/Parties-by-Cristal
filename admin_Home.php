<html>
<head>
<?php Session_start();
		if (!$_SESSION['loggedin_admin']) {
			header('Location: login.php');
			die();
		}
		?>
<title>Admin home</title>
<link rel="stylesheet" type="text/css" href="./css/admin_h.css">
</head>
<body style="background:url(img/admin_h.png); background-size:100%">
    
    <div class="right">
        <img src="img/logo.svg">
    </div>
    <div class="head">
         <h1>Admin Dashboard</h1>
    </div>
    <div class="homebox">
         <img src="img/add_img.png" height="100px" width="150px">
        <img src="img/update_img.png" height="100px" width="150px">
        <img src="img/delete_img.png" height="100px" width="140px">
        <img src="img/view_img.png" height="100px" width="150px">
        <br />
        
            <div class="textbox">
                <a href="php/viewuser.php"><input class="btn1" type="submit" value="Edit User" name="submit"></a>
            </div>
            <div class="textbox">
                <a href="php/vieworder.php"><input class="btn1" type="submit" value="Edit Order" name="submit"></a>
            </div>
            <div class="textbox">
                <a href="php/viewhotel.php"><input class="btn1" type="submit" value="Add Hotel" name="submit"></a>
                
            </div>
            <div class="textbox">
            <a href="php/viewfeedback.php"><input class="btn1" type="submit" value="View Feedback" name="submit"></a>
                
            </div>
            </div>
        </form>
    </div>
</body>
</html>