<?php
	include('gconn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `gallery` where gid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="gedit3.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2> <u>Gallery </u> </h2></div>
    <div class="entry" >
	<form method="POST" action="gupdate.php?id=<?php echo $id; ?>">
		

        <div class="top"><label>Name:</label><input type="text"<?php echo $row['gname']; ?> name="Name"></div>
		<div class="top"><label>Location:</label><input type="text"<?php echo $row['glocation']; ?> name="Locaton"></div>
        <div class="top"><label>Opening Time:</label><input type="time"<?php echo $row['opening_time']; ?> name="OpeningTime"></div>
        <div class="top"><label>Closing Time:</label><input type="time"<?php echo $row['closing_time']; ?> name="ClosingTime"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
		 
	</form>
	</div>

</body>
</html>