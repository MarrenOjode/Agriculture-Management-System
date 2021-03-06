<?php 

include ('db.php');

include ('adminMenu.php');
//require ('adminLogin.php');


$sql = "SELECT * FROM buyer";

//execute the query

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agri-Bizz : Buyers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	
<body>
	<div class="container">
		<h2 style="font: 30px 'Akaya Telivigala', cursive;font-weight: 900">Buyers</h2>
<table class="table">
	<thead>
		<tr style="font: 20px 'Akaya Telivigala', cursive;font-weight: 900">
		<th>ID</th>
		<th>Full Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Hash</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	

		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['bid']; ?></td>
					<td><?php echo $row['bname']; ?></td>
					<td><?php echo $row['busername']; ?></td>
					<td><?php echo $row['bemail']; ?></td>
					<td><?php echo $row['bhash']; ?></td>
					<td><?php echo $row['bmobile']; ?></td>
					<td><?php echo $row['baddress']; ?></td>
					<td><a class="btn btn-info" href="updateBuyers.php?bid=<?php echo $row['bid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deleteBuyer.php?bid=<?php echo $row['bid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

	
</body>
</html>
	