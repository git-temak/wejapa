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
	$fname=$_POST['firstName'];
 	$lname=$_POST['lastName'];
 	$dob=$_POST['dob'];
 	$email=$_POST['email'];
 	$favColor=$_POST['favColor'];
 	$gender=$_POST['gender'];
 	$department=$_POST['department'];
 	$password=$_POST['password'];
?>
<body style="background-color:<?php echo $favColor ?>">
	<div class="container py-4 py-md-5">
		<div class="row">
			<?php
			 	// Validate password strength
				$uppercase = preg_match('@[A-Z]@', $password);
				$lowercase = preg_match('@[a-z]@', $password);
				$number    = preg_match('@[0-9]@', $password);
				$symbol = preg_match('@[^\w]@', $password);

			 	if(isset($_POST['submit'])){
			 	echo '<div class="col text-center text-white"><h2><u>Recorded Data</u></h2><br>
						<h4 class="text-danger"><b>First Name:</b> '. $fname .'</h4><br>
						<h4 class="text-danger"><b>Last Name:</b> '. $lname .'</h4><br>
						<h4 class="text-danger"><b>Email Address:</b> '. $email .'</h4><br>
						<h4 class="text-danger"><b>Date of Birth:</b> '. $dob .'</h4><br>
						<h4 class="text-danger"><b>Department:</b> '. $department .'</h4><br>
						<h4 class="text-danger"><b>Gender:</b> '. $gender .'</h4><br>
						<h4 class="text-danger"><b>Favourite Color:</b> '. $favColor .'</h4></div>';

					if(!$uppercase || !$lowercase || !$number || !$symbol || strlen($password) < 15) {
					    echo 'Your password must be at least 15 characters long, contain numbers, uppercase and lowercase letters, and must contain special characters such as %^&@.';
					}
				}
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