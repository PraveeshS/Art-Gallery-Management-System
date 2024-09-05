
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork</title>
    <link rel="stylesheet" href="arindex2.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Artwork</h2></div>
           <div class="entry">
		<form method="POST" action="aradd.php">
			<div class="top"><label>Id:</label><input type="text" name="art_id"></div>
			<div class="top"><label>Art Name:</label><input type="text" name="art_name"></div>
			<div class="top"><label>Type of art:</label><input type="text" name="Type_of_art"></div>
            <div class="top"><label>Price:</label><input type="text" name="price"></div>
            <div class="top"><label>Year:</label><input type="text" name="year"></div>
            <div class="top"><label>Artist Id:</label><input type="text" name="aid"></div>
            <div class="top"><label>Gallery Id:</label><input type="text" name="gid"></div>
			
            
            <div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>

        <div>
		<table border="1" class="tt">
			<thead>
				<th>Id</th>
				<th>Art Name</th>
				<th>Type of art</th>
                <th>Price<h6>(in Rupee)</h6></th>
                <th>Year</th>
                <th>Artist Id</th>
                <th>Gallery Id</th>
                <th>Customer Username</th>
                
				<th>Actions</th>
			</thead>
			<tbody>



				<?php
					include('arconn.php');
					$query=mysqli_query($conn,"select * from `artwork`");
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
              <td><?php echo $row['cid']; ?></td>
							<td>
								<a href="aredit.php?id=<?php echo $row['art_id']; ?>">Edit</a>
								<a href="ardelete.php?id=<?php echo $row['art_id']; ?>">Delete</a>
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

