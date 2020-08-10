<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- BOOTSTRAP V4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<?php
session_start();

if(!empty($_SESSION['genderCheck'])){foreach($_SESSION['genderCheck'] as $selected){}}
?>
<body style="background-color:<?php echo $_SESSION['favColor'] ?>">
	<div class="container py-4 py-md-5">
		<div class="row">
			<?php
			 	echo '<div class="col text-center text-white"><h2><u>Recorded Data</u></h2><br>
						<h4 class="text-danger"><b>First Name:</b> '. $_SESSION['fname'] .'</h4><br>
						<h4 class="text-danger"><b>Last Name:</b> '. $_SESSION['lname'] .'</h4><br>
						<h4 class="text-danger"><b>Email Address:</b> '. $_SESSION['email'] .'</h4><br>
						<h4 class="text-danger"><b>Date of Birth:</b> '. $_SESSION['dob'] .'</h4><br>
						<h4 class="text-danger"><b>Department:</b> '. $_SESSION['department'] .'</h4><br>
						<h4 class="text-danger"><b>Gender:</b> '. $selected .'</h4><br>
						<h4 class="text-danger"><b>Favourite Color:</b> '. $_SESSION['favColor'] .'</h4></div>';
			?>	
		</div>
	</div>

	<!-- SCRIPTS -->
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<!-- END SCRIPTS -->
</body>
</html>