<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
	<style>
		.bg-container{
					background-color:lightblue;
					padding-top:200px;
			}
			.card-container{
				background-color:white;'
				height:300vh;
				width:40vw;
				padding-top:20px;
				padding-bottom:20px;
				border-radius:10px;
				
			}
	</style>
</head>
	<body class="bg">
	<?php
			 $servername="localhost";
			 $username="root";
			 $password="";
			 $dbname="test";
			try
			{
				$conn = new mysqli($servername,$username,$password,$dbname);
			}
			catch(Exception $e)
			{
				die('some connection is problem ' . $e->get_Message());
			}
			$query="SELECT * FROM rakesh WHERE id=" .$_GET['id'];
			//echo '<pre>';print_r($query);echo '</pre>';die();
			try{
				$result=$conn->query($query);
			}
			catch(Exception $e)
			{
				$result = false;
				var_dump('SQL_ERROR' . $e->getMessage());
			}
			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$row=$rows[0];
			//echo '<pre>'; print_r($row);echo'</pre>';die();
	?>
	
	
	<?php
			$city = ["Hyderabad", "Kurnool", "Warangal", "Anatapur", "Chittoor","Nandyal","Guntur","Others"];
			$mode = ["Bus","Train","Flight","Ship"];
			$policies = ['pol1', 'pol2'];
		?>
		<center>
			<div class="card-container">
			
			<!--
			<u>
				<?php foreach($policies as $p):?>
					<li><?php echo $p?></li>
				<?php endforeach?>
			</u>
			-->
			
		<form action="travel_save.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $row['id']?>">
			<table>
					<tr>
						<th  colspan="2"><h1>Travel</h1></th>
						</th></th>
					</tr>
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" placeholder="Enter Your Name" name="name" value="<?php echo $row['name']?>"></td>
					</tr>
					<tr>
						<td><label>Photo</label></td>
						<td><input type="file" name="photo"></td>
					</tr>
					<tr>
						<td><label>Mobile Number</label></td>
						<td><input type="text" placeholder="Enter Your Mobile Number" name="mbno"  value="<?php echo $row['mbno']?>"></td>
					</tr>
					<tr>
						<td><label>Age</label></td>
						<td><input type="text" placeholder="Enter Your Age" name="age" value="<?php echo $row['age']?>"></td>
					</tr>
					<tr>
						<td><label>City</label></td>
						<td>
							<select name="city">
							<option>--Select Here--</option>
							<?php foreach($city as $c):?>
							<option value=<?php echo $c?>  <?php echo $c == $row['city'] ? 'selected' : ''?> ><?php echo $c?> </option>
							<?php endforeach?>
							</select>
					</tr>
					<tr>
							<td><label>Date of Travel</label></td>
							<td><input type="Date" name="date" value="<?php echo $row['date']?>"></td>
					</tr>
					
					<tr>
						<td><label>Mode</label></td>
						<td>
							<select name="mode">
							<option>--Select Here--</option>
							<?php foreach($mode as $m):?>
							<option value=<?php echo $m?> <?php echo $m == $row['mode'] ? 'selected' : ''?>><?php echo $m?> </option>
							<?php endforeach?>
							</select>
					</tr>
					
					<tr>
						<td colspan="2" style="text-align:center; padding-top:5px;"><input type="submit" value="Submit"></td>
						<td></td>
					</tr>
					
			</table>
			</form>
				</div>
			</center>
		</body>
 </html>