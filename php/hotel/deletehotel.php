<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['hotel_no'])){
$sql = "DELETE FROM hotel WHERE hotel_no = ".$_GET['hotel_no'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: viewhotel.php");
}
?>
