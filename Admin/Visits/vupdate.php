<?php
	include('vconn.php');
	$id=$_GET['id'];
	
	$gid=$_POST['GID'];
	$cid=$_POST['CID'];

	mysqli_query($conn,"update `vists` set gid='$gid',cid='$cid' where gid='$id'");
	header('location:vindex.php');
?>
