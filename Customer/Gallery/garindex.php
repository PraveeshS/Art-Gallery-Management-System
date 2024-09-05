
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork</title>
    <link rel="stylesheet" href="garindex.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">
           <div class="gal"><h2>Gallery</h2></div>
           <div class="entry">
		<form method="POST" action="search.php">
			<div class="top"><label>search</label><input type="text" name="gid"></div>
			
            
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
                <th>Customer Id</th>
                
				
			</thead>
			<tbody>



				<?php
					include('garconn.php');
					
					$gid=$_POST['gid'];
					$query=mysqli_query($conn,"SELECT a.* from artwork a,gallery g WHERE a.gid=g.gid AND g.gid='$gid'");
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
