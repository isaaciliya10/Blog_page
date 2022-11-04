<?php    
   include_once"db_configure.php";

if(isset($_GET['approve'])){
	$approve = $_GET['approve'];

	$sql = "UPDATE comment SET status= 'ON' WHERE id= $approve";
	$query = mysqli_query($connect,$sql);
	  header("Location:../comment.php");
}

 ?>