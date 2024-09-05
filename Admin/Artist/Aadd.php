<?php
	include('Aconn.php');
 
	$artist_id=$_POST['Aid'];
	$artist_name=$_POST['ArtistName'];
	$artist_loc=$_POST['Artistlocation'];
    $style=$_POST['Style'];
 
	mysqli_query($conn,"insert into `artist` (artist_id,artist_name,artist_loc,style) values 
    ('$artist_id','$artist_name','$artist_loc','$style')");
	header('location:Aindex.php');
 
?>