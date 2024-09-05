<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="cdfront6.css">
</head>
<body>
    <div class="hero">
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>
            <div class="cat"><h2><a href="../customerlogin.php" > logout</a></h2></div>
       <div class="form-box">
       <div class="log"><h3>Explore</h3></div>
        <div class="top"><h3><a href="Artwork/carindex.php">Artwork</a></h3></div>
        <div class="top"><h3><a href="Exhibition/ceindex.php" > Exhibition</a></h3></div>
</div>
<div>
       <div class="gal"><h2>Artworks Bought</h2></div>
       <table border="1" class="tt">
			<thead>
				<th>Id</th>
				<th>Art Name</th>
				<th>Type of art</th>
                <th>Price<h6>(in Rupee)</h6></th>
                <th>Year</th>
                <th>Artist Id</th>
                <th>Gallery Id</th>
			</thead>
			<tbody>



				<?php
					include('carconn.php');
                    session_start();
                    $username = $_SESSION['username'];
					$query=mysqli_query($conn,"SELECT a.* FROM artwork a,customer c WHERE a.cid=c.cid AND c.cid='$username'");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['art_id']; ?></td>
							<td><?php echo $row['art_name']; ?></td>
							<td><?php echo $row['type_of_art']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td><?php echo $row['artist_id']; ?></td>
                            <td><?php echo $row['gid']; ?></td>
                            
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
        </div>

</body>
</html>
<?php
?>

