<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php
			$city = ["Hyderabad", "Kurnool"];
			$Travel = ["Bus","Train"];
		?>
		<div class="container-fluid">
			<h1 class="text-uppercase text-center mb-5 mt-5">Ticket</h1>
			<form action="ket.php" method="POST" class="bg-warning"> 
				<div class="border border-primary">
					<input type="hidden" name="id" value="">
						<div class="form-group">
							<label for="name">Name:</label>
								<input type="text"  class="form-control" name="name"><br>
						</div>
						<div class="form-group">
							<label name="phno">Mobile:</label>
							<input type="tel"  class="form-control" name="phno"><br>
						</div>
						<div class="form-group">
							<label name="AGE">age:</label>
							<input type="text" class="form-control" name="age"><br>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-primary">Submit</button>
						</div>
				</div>
			</form>

    <div class="container">
        <img src="https://via.placeholder.com/150" alt="Image 1">
        <img src="https://via.placeholder.com/150" alt="Image 2">
        <img src="https://via.placeholder.com/150" alt="Image 3">
    </div>


		</div>
		
	</body>
</html>
