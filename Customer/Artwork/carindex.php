
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork</title>
    <link rel="stylesheet" href="carindex4.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">

		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Artwork</h2></div>



        
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
					$query=mysqli_query($conn,"select * from `artwork` where cid IS NULL");
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

        </div>

        <br>
	
        
    </div>
</body>
</html>
