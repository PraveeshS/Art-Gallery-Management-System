<?php
	include('arconn.php');
	$id=$_GET['id'];
	
	$arname=$_POST['art_name'];
    $toart=$_POST['Type_of_art'];
    $price=$_POST['price'];
    $year=$_POST['year'];
    $aid=$_POST['aid'];
    $gid=$_POST['gid'];
    $cid=$_POST['cid'];
 
	mysqli_query($conn,"update `artwork` set  art_name='$arname',type_of_art='$toart',
    price='$price',year='$year',artist_id='$aid',gid='$gid',cid='$cid' where art_id='$id'");
	header('location:arindex.php');
?>