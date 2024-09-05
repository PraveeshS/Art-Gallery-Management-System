<?php
	include('garconn.php');
 
	$gid=$_POST['gid'];
	

 
	mysqli_query($conn,"SELECT a.* from artwork a,gallery g WHERE a.gid=g.gid AND g.gid='$gid'");
	header('location:garindex.php');
 
?>