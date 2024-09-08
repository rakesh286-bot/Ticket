<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body class="bg">
		<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="travel";
		try
		{
			$connection= new mysqli($servername,$username,$password,$dbname);
			if($connection->connect_error)
			{
				die('connection failed: ' . $connection->connect_error);
			}
		}
		catch(Exception $e)
		{
			die('Some connection problem, please check: ' . $e->getMessage());
		}
		
		$query="SELECT *FROM travel;";
		try
		{
			$result = $connection->query($query);
		}
		catch(Exception $e)
		{
			$result=false;
			var_dump('SQL_Error ' .$e->getMessage());
		}
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		//$rows = $result->fetch_assoc();// $result->fetch_all(MYSQLI_ASSOC);
		//echo '<pre>'; print_r($rows); echo '</pre>';die();
	?>
	<div class="container">
		<h1>Tickets</h1><br>
		<a href="Tick.php">Add New One</a><br><br>
	<table>
		<thead>
			<tr>
				<th>name</th>
				<th>Mobile</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($rows as $row):?>
				<tr>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['phno'] ?></td>
					<td><a href="ketedit.php">Edit</a></td>
					<td>
						<a href="#" onclick="deleteRow(<?php echo $row['id']?>)">Delete</a>
					</td>
				</tr>
			<?php endforeach?>
		
		</tbody>
	</table>
	</div>
	<script>
		function deleteRow(id) {
			var result = confirm("Are you sure?");
			if(result) {
				location.href = "ketdelete.php";
			}
		}
	</script>
</body>
</html>