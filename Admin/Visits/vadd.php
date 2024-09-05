<?php
	include('vconn.php');
 
	$gid=$_POST['GID'];
	$cid=$_POST['CID'];
 
	mysqli_query($conn,"insert into `vists` (`gid`,`cid`) VALUES 
    ('$gid','$cid')");
	header('location:vindex.php');
 
?>