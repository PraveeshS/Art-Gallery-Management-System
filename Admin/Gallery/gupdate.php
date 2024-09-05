<?php
	include('gconn.php');
	$id=$_GET['id'];
	
	$gname=$_POST['Name'];
	$glocation=$_POST['Locaton'];
    $opening_time=$_POST['OpeningTime'];
    $closing_time=$_POST['ClosingTime'];
 
	mysqli_query($conn,"update `gallery` set `gname`='$gname', `glocation`='$glocation',`opening_time`='$opening_time',
    `closing_time`='$closing_time' where `gid`='$id'");
	header('location:gindex.php');
?>