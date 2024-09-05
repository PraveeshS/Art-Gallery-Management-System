<?php
	include('econn.php');
	$id=$_GET['id'];
	
	$elocation=$_POST['Locaton'];
    $start_date=$_POST['Startdate'];
    $end_date=$_POST['Enddate'];
    $gid=$_POST['gid'];
 try{
	mysqli_query($conn,"update `exhibition` set  `elocation`='$elocation',`start_date`='$start_date',
    `end_date`='$end_date',`gid`='$gid' where `eid`='$id'");
	header('location:eindex.php');
 }
	catch(mysqli_sql_exception)
 {
	echo"<script>alert('End date cannot be before start date')</script>";
 }
?>