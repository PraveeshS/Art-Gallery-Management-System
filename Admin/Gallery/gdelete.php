<?php
	$id=$_GET['id'];
	include('gconn.php');
	mysqli_query($conn,"delete from `gallery` where gid='$id'");
	header('location:gindex.php');
?>