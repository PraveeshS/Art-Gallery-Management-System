<?php
	include('exconn.php');
 
	$eid=$_POST['EID'];
	$art_id=$_POST['ARTID'];
 
	mysqli_query($conn,"insert into `explores` (`eid`,`art_id`) VALUES 
    ('$eid','$art_id')");
	header('location:exindex.php');
 
?>