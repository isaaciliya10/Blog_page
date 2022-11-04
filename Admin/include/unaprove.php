<?php    
  include_once"db_configure.php";
   
if(isset($_GET['unaprove'])){
	$unaprove = $_GET['unaprove'];

	$sql = "UPDATE comment SET status= 'OFF' WHERE id= $unaprove";
	$query = mysqli_query($connect,$sql);
   header("Location:../comment.php");
}

 ?>