<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibition</title>
    <link rel="stylesheet" href="ceindex4.css">
</head>
<body>

<div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
            <div class="gal"><h2>Exhibition</h2></div>

            <div>
		<table border="1" class="tt">
			<thead>
				<th>Id</th>
				<th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
				<th>Gallery Id</th>
				
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