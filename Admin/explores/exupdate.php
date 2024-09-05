<?php
	include('exconn.php');
	$id=$_GET['id'];
	
	$eid=$_POST['EID'];
	$art_id=$_POST['ARTID'];

	mysqli_query($conn,"update `explores` set eid='$eid',art_id='$art_id' where eid='$id'");
	header('location:exindex.php');
?>
