<?php
	include('econn.php');
 
	$eid=$_POST['eid'];
	$elocation=$_POST['Locaton'];
    $start_date=$_POST['Startdate'];
    $end_date=$_POST['Enddate'];
    $gid=$_POST['gid'];

 try{
	mysqli_query($conn,"insert into `exhibition` (`eid`,`elocation`,`start_date`,`end_date`,`gid`) VALUES 
    ('$eid','$elocation','$start_date','$end_date','$gid')");
	header('location:eindex.php');	
 }
 catch(mysqli_sql_exception)
 {
	echo "<script>alert('End date cannot be before start date') </script>";
 }
 
?>
