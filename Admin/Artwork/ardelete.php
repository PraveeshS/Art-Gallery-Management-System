<?php
	$id=$_GET['id'];
	include('arconn.php');
	mysqli_query($conn,"delete from `artwork` where art_id='$id'");
	header('location:arindex.php');
?>