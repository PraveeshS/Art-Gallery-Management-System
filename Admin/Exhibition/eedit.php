<?php
	include('econn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `exhibition` where eid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Exhibition</title>
<link rel="stylesheet" href="eedit2.css">
</head>
<body>
    <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
		<div class="gal"><h2> <u>Exhibition </u> </h2></div>
    <div class="entry" >
	<form method="POST" action="eupdate.php?id=<?php echo $id; ?>">
		
	    <div class="top"><label>Location:</label><input type="text" name="Locaton"></div>
        <div class="top"><label>Start Date:</label><input type="date" name="Startdate"></div>
        <div class="top"><label>End Date:</label><input type="date" name="Enddate"></div>
		<div class="top"><label>Gallery Id:</label><input type="text" name="gid"></div>
        <div class="top"><input type="submit" name="add"></div>
		<br><br><br>
		 
	</form>
	</div>

</body>
</html>