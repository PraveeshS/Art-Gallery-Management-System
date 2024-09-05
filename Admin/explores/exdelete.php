<?php
	$id=$_GET['id'];
	include('exconn.php');
	mysqli_query($conn,"delete from `explores` where eid='$id'");
	header('location:exindex.php');
?>