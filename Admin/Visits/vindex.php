<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visits</title>
    <link rel="stylesheet" href="vindex2.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1>Art Gallery Managment System</a></h1></div>


        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Visits</h2></div>
           <div class="entry">
		<form method="POST" action="vadd.php">
			<div class="top"><label>Gallery-ID:</label><input type="text" name="GID"></div>
			<div class="top"><label>Customer-Username:</label><input type="text" name="CID"></div>
			<div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>

        <div>
		<table border="1" class="tt">
			<thead>
				<th>Gallery-ID</th>
				<th>Customer-Username</th>
                <th>Actions</th>
			</thead>
			<tbody>
				<?php
					include('vconn.php');
					$query=mysqli_query($conn,"select * from `vists`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['gid']; ?></td>
							<td><?php echo $row['cid']; ?></td>
							<td>
								<a href="vedit.php?id=<?php echo $row['gid']; ?>">Edit</a>
								<a href="vdelete.php?id=<?php echo $row['gid']; ?>">Delete</a>
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