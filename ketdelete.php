<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		body{
			background-color:wheat;
		}
		.details{
			text-align:center;
		}
	</style>
</head>
	<body>
	<?php
			 $servername="localhost";
			 $username="root";
			 $password="";
			 $dbname="ticket";
			try
			{
				 $conn = new mysqli($servername,$username,$password,$dbname);
				if( $conn->connect_error)
				{
					die('connection error' . $conn->connect_error);
				}
			}
			catch(Exception $e)
			{
				die('some connection is problem ' . $e->get_Message());
			}
			$id = $_GET['id'];
			$query="DELETE FROM pass  WHERE id=$id";
			try
			{
				$result=$conn->query($query);
			}
			catch(Exception $e)
			{
				$result = false;
				var_dump('SQL_ERROR' . $e->getMessage());
			}
	?>
	<h3>Record Deleted Successfully <a href="list_of_ticket.php">Click Here</a> to view all details</h3>
	</body>
	</html>