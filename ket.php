<html>
		<head>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
		<style>
		</style>
		</head>
	<body>
	<?php
		/* $servername ="localhost";
		$username ="root";
		$password ="";
		$dbname="travel";
		$conn =new mysqli($servername,$username,$password,$dbname);
		$name=$_POST['name'];
		$phno=$_POST['phno'];
		$sql="insert into travel(name,phno)values('$name','$phno');";
		$result =$conn->query($sql); */
	?>
	<?php 
		$servername ="localhost";
		$username ="root";
		$password ="";
		$dbname ="travel";
		$conn =new mysqli($servername,$username,$password,$dbname);
		$name= $_POST['name'];
		$age =$_POST['age'];
		$phno =$_POST['phno'];
		$sql ="insert into travel(name,age,phno) values('$name','$age','$phno');";
		$result =$conn->query($sql);
		?>
		
	
	
<?php if($result== true):?>
<h3>your form is submitted</h3><a href="list_of_ticket.php">click here</a>
<?php else:?>
<h3>your form is not submitted</h3>
<?php endif?>
</body>
</html>
