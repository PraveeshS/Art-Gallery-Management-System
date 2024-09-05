<?php
	include('Aconn.php');
	$id=$_GET['id'];

	$artist_name=$_POST['ArtistName'];
	$artist_loc=$_POST['Artistlocation'];
    $style=$_POST['Style'];
 
	mysqli_query($conn,"update `artist` set artist_name='$artist_name',artist_loc='$artist_loc',
    style='$style' where artist_id='$id'");
	header('location:Aindex.php');
?>
