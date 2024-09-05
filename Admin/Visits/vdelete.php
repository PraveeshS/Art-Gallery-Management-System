<?php
	$id=$_GET['id'];
	include('vconn.php');
	mysqli_query($conn,"delete from `vists` where gid='$id'");
	header('location:vindex.php');
?>