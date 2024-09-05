
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <link rel="stylesheet" href="Aindex3.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Artist</h2></div>
           <div class="entry">
		<form method="POST" action="Aadd.php">
            <div class="top"><label>Artist-id:</label><input type="text" name="Aid"></div>
            <div class="top"><label>Name:</label><input type="text" name="ArtistName"></div>
            <div class="top"><label>Artist-location:</label><input type="text" name="Artistlocation"></div>
            <div class="top"><label>Style:</label><input type="text" name="Style"></div>
			<div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>
        <div>
		<table border="1" class="tt">
			<thead>
				<th>Aid</th>
				<th>ArtistName</th>
				<th>ArtistLocation</th>
                <th>Style</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php
					include('Aconn.php');
					$query=mysqli_query($conn,"select * from `artist`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['artist_id']; ?></td>
							<td><?php echo $row['artist_name']; ?></td>
							<td><?php echo $row['artist_loc']; ?></td>
                            <td><?php echo $row['style']; ?></td>
							<td>
								<a href="Aedit.php?id=<?php echo $row['artist_id']; ?>">Edit</a>
								<a href="Adelete.php?id=<?php echo $row['artist_id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>

        </div>

        <br>
        
    </div>
</body>
</html>
