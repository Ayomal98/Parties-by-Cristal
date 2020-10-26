<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql = "DELETE FROM users WHERE id = ".$_GET['id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: viewuser.php");
}
?>
