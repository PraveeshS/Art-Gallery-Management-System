<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gindex4.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Gallery</h2></div>
           <div class="entry">
		<form method="POST" action="gadd.php">
			<div class="top"><label>Id:</label><input type="text" name="gid"></div>
			<div class="top"><label>Name:</label><input type="text" name="Name"></div>
			<div class="top"><label>Locaton:</label><input type="text" name="Locaton"></div>
            <div class="top"><label>Opening Time:</label><input type="time" name="OpeningTime"></div>
            <div class="top"><label>Closing Time:</label><input type="time" name="ClosingTime"></div>
			<div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>

        <div>
		<table border="1" class="tt">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Location</th>
                <th>Opening Time</th>
                <th>Closing Time</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php
					include('gconn.php');
					$query=mysqli_query($conn,"select * from `gallery`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['gid']; ?></td>
							<td><?php echo $row['gname']; ?></td>
							<td><?php echo $row['glocation']; ?></td>
                            <td><?php echo $row['opening_time']; ?></td>
                            <td><?php echo $row['closing_time']; ?></td>
							<td>
								<a href="gedit.php?id=<?php echo $row['gid']; ?>">Edit</a>
								<a href="gdelete.php?id=<?php echo $row['gid']; ?>">Delete</a>
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
