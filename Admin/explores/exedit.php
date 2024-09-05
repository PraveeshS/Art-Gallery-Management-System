<?php
	include('exconn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `explores` where eid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Explores</title>
<link rel="stylesheet" href="exedit3.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>
        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2>Explores<u></u> </h2></div>
		<div class="entry">

	<form method="POST" action="exupdate.php?id=<?php echo $id; ?>">
        <div class="top"><label>Exhibition-ID:</label><input type="text"<?php echo $row['eid']; ?> name="EID"></div>
		<div class="top"><label>Artwork-ID:</label><input type="text"<?php echo $row['art_id']; ?> name="ARTID"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
	</form>
</div>
</body>
</html>