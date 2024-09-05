<?php
	include('gconn.php');
 
	$gid=$_POST['gid'];
	$gname=$_POST['Name'];
	$glocation=$_POST['Locaton'];
    $opening_time=$_POST['OpeningTime'];
    $closing_time=$_POST['ClosingTime'];
 
	mysqli_query($conn,"insert into `gallery` (`gid`,`gname`,`glocation`,`opening_time`,`closing_time`) VALUES 
    ('$gid','$gname','$glocation','$opening_time','$closing_time')");
	header('location:gindex.php');
 
?>
