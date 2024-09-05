<?php
	include('arconn.php');
 
	$arid=$_POST['art_id'];
	$arname=$_POST['art_name'];
    $toart=$_POST['Type_of_art'];
    $price=$_POST['price'];
    $year=$_POST['year'];
    $aid=$_POST['aid'];
    $gid=$_POST['gid'];
    $cid=NULL;

    try{
	mysqli_query($conn,"insert into `artwork` (art_id,art_name,type_of_art,price,year,artist_id,gid) values 
    ('$arid','$arname','$toart','$price','$year','$aid','$gid')");
	header('location:arindex.php');
    }
    catch(mysqli_sql_exception)
 {
	echo "<script>alert('Negative values are not allowed for price ') </script>";
 }
?>