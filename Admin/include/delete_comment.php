<?php
include_once"db_configure.php";
if(isset($_GET['delete'])){
	 $delete= $_GET['delete'];
	 $sql= "DELETE FROM comment WHERE id = $delete";
	  $query= mysqli_query($connect,$sql);
	  header("Location:../comment.php"); 
	 
}
?>