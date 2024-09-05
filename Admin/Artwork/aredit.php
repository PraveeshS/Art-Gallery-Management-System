<?php
	include('arconn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `artwork` where art_id='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>art work</title>
<link rel="stylesheet" href="aredit5.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>
        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2> <u>Artwork </u> </h2></div>
    <div class="entry" >
	<form method="POST" action="arupdate.php?id=<?php echo $id; ?>">
        
		<div class="top"><label>Art Name:</label><input type="text" name="art_name"></div>
		<div class="top"><label>Type of art:</label><input type="text" name="Type_of_art"></div>
        <div class="top"><label>Price</label><input type="text" name="price"></div>
        <div class="top"><label>Year:</label><input type="text" name="year"></div>
        <div class="top"><label>Artist Id:</label><input type="text" name="aid"></div>
        <div class="top"><label>Gallery Id:</label><input type="text" name="gid"></div>
		<div class="top"><label>Customer Username:</label><input type="text" name="cid"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
		 
	</form>
	</div>

</body>
</html>