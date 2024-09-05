<?php
	$id=$_GET['id'];
	include('Aconn.php');
	mysqli_query($conn,"delete from `artist` where artist_id='$id'");
	header('location:Aindex.php');
?>