<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
    <link rel="stylesheet" href="cindex3.css">
</head>
<body>

<div>
        <div id="body1">
            <div class="title"> <h1> Art Gallery Managment System</h1> </div>

        </div>
        <div id="body2">
		<a href="javascript:history.back()"><button class="sas">Back</button> </a>
            <div class="gal"><h2>Customer details</h2></div>

            <div>
		<table border="1" class="tt">
			<thead>
				<th>Username</th>
                <th>Name</th>
                <th>DOB</th>
				<th>Address</th>
                
				
			</thead>
			<tbody>
				<?php
					include('ccon.php');
					$query=mysqli_query($conn,"select * from `customer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['cid']; ?></td>
							<td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['address']; ?></td>
							
							
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