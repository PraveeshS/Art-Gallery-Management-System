<?php
	$id=$_GET['id'];
	include('econn.php');
	mysqli_query($conn,"delete from `exhibition` where eid='$id'");
	header('location:eindex.php');
?>