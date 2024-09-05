<?php
	include('Aconn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `artist` where artist_id='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Artist</title>
<link rel="stylesheet" href="Aedit2.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>
        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2> <u>Artist</u> </h2></div>
		<div class="entry">
	<form method="POST" action="Aupdate.php?id=<?php echo $id; ?>">
        <div class="top"><label>Name:</label><input type="text"<?php echo $row['artist_name']; ?> name="ArtistName"></div>
		<div class="top"><label>Artist-location:</label><input type="text"<?php echo $row['artist_loc']; ?> name="Artistlocation"></div>
        <div class="top"><label>Style:</label><input type="text"<?php echo $row['style']; ?> name="Style"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
	</form>
</div>
</body>
</html>