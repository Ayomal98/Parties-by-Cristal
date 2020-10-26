<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password_hash = password_hash($password);
 
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    
    if ($query->rowCount()>0) {
        echo '<p class="error">This Email ID is already Exist</p>';
    }
    
    if ($query->rowCount()==0){
        $query=$connection->prepare("INSERT INTO users (USERNAME,PASSWORD,EMAIL) VALUES (:username,:password,:email)");
        $query->bindParam("username",$username, PDO::PARAM_STR);
        $query->bindParam("password",$password,PDO::PARAM_STR);
        $query->bindParam("email",$email,PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
 
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>

    <body>
        <form method="post" action="" name="signup-form">
            <div class="form-element">
                <label id="lb">Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label id="lb">Email</label>
                <input type="email" name="email" required />
            </div>
            <div class="form-element">
                <label id="lb">Password</label>
                <input type="password" name="password" required />
            </div>
            <button type="submit" name="register" value="register">Register</button>
        </form>
            <h3>already have an account? Log In below</h3><br />
            <a href="login.php"><button  name="log" value="Log In">Log In</button></a>
    </body>
</html>
