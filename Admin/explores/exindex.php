<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explores</title>
    <link rel="stylesheet" href="exindex2.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1>Art Gallery Managment System</a></h1></div>


        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Explores</h2></div>
           <div class="entry">
		<form method="POST" action="exadd.php">
			<div class="top"><label>Exhibition-ID:</label><input type="text" name="EID"></div>
			<div class="top"><label>Artwork-ID:</label><input type="text" name="ARTID"></div>
			<div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>

        <div>
		<table border="1" class="tt">
			<thead>
				<th>Exhibition-ID</th>
				<th>Artwork-ID</th>
                <th>Actions</th>
			</thead>
			<tbody>
				<?php
					include('exconn.php');
					$query=mysqli_query($conn,"select * from `explores`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['eid']; ?></td>
							<td><?php echo $row['art_id']; ?></td>
							<td>
								<a href="exedit.php?id=<?php echo $row['eid']; ?>">Edit</a>
								<a href="exdelete.php?id=<?php echo $row['eid']; ?>">Delete</a>
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