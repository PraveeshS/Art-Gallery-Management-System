<?php
	include('vconn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `vists` where gid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Visits</title>
<link rel="stylesheet" href="vedit3.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>
        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2> <u>Visits</u> </h2></div>
		<div class="entry">
	<form method="POST" action="vupdate.php?id=<?php echo $id; ?>">
        <div class="top"><label>Gallery-ID:</label><input type="text"<?php echo $row['gid']; ?> name="GID"></div>
		<div class="top"><label>Customer-Username:</label><input type="text"<?php echo $row['cid']; ?> name="CID"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
	</form>
</div>
</body>
</html>