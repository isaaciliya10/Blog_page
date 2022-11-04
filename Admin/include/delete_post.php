<?php
include_once"db_configure.php";
$mgs="";
if(isset($_GET['delete'])){
	 $delete= $_GET['delete'];
	 $sql= "DELETE FROM add_post WHERE id = $delete";
	  $query= mysqli_query($connect, $sql);
	  if($query){

	  	echo  $mgs = "<div class='alert alert-success text-center'>Advert Has Been Added Successfully</div>";
	  	 header("Location:../dashboard.php"); 
	  } 
}
?>