<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['Id'])){
$sql = "DELETE FROM order_user WHERE Id = ".$_GET['Id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: vieworder.php");
}
?>
