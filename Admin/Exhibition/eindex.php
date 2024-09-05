<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibition</title>
    <link rel="stylesheet" href="eindex2.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

            

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
           <div class="gal"><h2>Exhibition</h2></div>
           <div class="entry">
		<form method="POST" action="eadd.php">
			<div class="top"><label>Id:</label><input type="text" name="eid"></div>
			<div class="top"><label>Location:</label><input type="text" name="Locaton"></div>
            <div class="top"><label>Start Date:</label><input type="date" name="Startdate"></div>
            <div class="top"><label>End Date:</label><input type="date" name="Enddate"></div>
			<div class="top"><label>Gallery Id:</label><input type="text" name="gid"></div>
			<div class="top"><input type="submit" name="add"></div>
		</form>
	    </div>

        <div>
		<table border="1" class="tt">
			<thead>
				<th>Id</th>
				<th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
				<th>Gallery Id</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php
					include('econn.php');
					$query=mysqli_query($conn,"select * from `exhibition`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['eid']; ?></td>
							<td><?php echo $row['elocation']; ?></td>
                            <td><?php echo $row['start_date']; ?></td>
                            <td><?php echo $row['end_date']; ?></td>
							<td><?php echo $row['gid']; ?></td>
							<td>
								<a href="eedit.php?id=<?php echo $row['eid']; ?>">Edit</a>
								<a href="edelete.php?id=<?php echo $row['eid']; ?>">Delete</a>
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
