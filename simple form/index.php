<!DOCTYPE html>
<html>
<head>
	<title>Simple Signup Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- BOOTSTRAP V4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		input,button,.form-control{border-radius: 10px !important;}
	</style>
</head>
<?php
session_start(); 

$_SESSION['fname']=$_POST['firstName'];
$_SESSION['lname']=$_POST['lastName'];
$_SESSION['dob']=$_POST['dob'];
$_SESSION['email']=$_POST['email'];
$_SESSION['favColor']=$_POST['favColor'];
$_SESSION['department']=$_POST['department'];
$_SESSION['genderCheck']=$_POST['genderCheck'];

$password=$_POST['password'];
// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$symbol = preg_match('@[^\w]@', $password);

	if (isset($_POST['submit'])) {
		//check first name
		if(empty($_POST['firstName']))
		$msg_fname = "Please enter a first name with letters only";
		$name_field = $_POST['firstName'];
		preg_match('/^[a-zA-Z ]*$/', $name_field);

		//check last name
		if(empty($_POST['lastName']))
		$msg_lname = "Please enter a last name with letters only";
		$name_field = $_POST['lastName'];
		preg_match('/^[a-zA-Z ]*$/', $name_field);

		//check email
		if(empty($_POST['email']))
		$msg_email = "Please enter a valid email address";
		$email_field = $_POST['email'];
		preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email_field);

		//check department
		if(empty($_POST['department']))
		$msg_department = "Please select your department";

		//check gender
		if(empty($_POST['genderCheck']))
		$msg_gender = "Please select at least one option";

		//check password
		if(!$uppercase || !$lowercase || !$number || !$symbol || strlen($password) < 15)
		$msg_password = "Your password must be at least 15 characters long, contain numbers, uppercase and lowercase letters, and must contain special characters such as %^&@.";

		// if validation is all correct 
		if($msg_fname=="" && $msg_lname=="" && $msg_email=="" && $msg_department=="" && $msg_gender=="" && $msg_password==""){
			header ('Location: form.php');
		}
	}
?>
<body>
	<div class="container py-4 py-md-5">
		<div class="row mx-auto">
			<div class="col text-center">
				<h1>Signup Form</h1>
				<p>Please fill in your details below. Kindly note that ALL fields are required. Thank you!</p>
				<form class="pt-3 my-4" action="" method="post">
					<div class="row justify-content-center mx-md-5 px-md-4">
					    <div class="col-6">
					      <label class="sr font-weight-bold" for="firstName">First Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
					      </div>
					      <?php echo "<small class='form-text text-danger'>".$msg_fname."</small>"; ?>
					    </div>
					    <div class="col-6">
					      <label class="sr font-weight-bold" for="lastName">Last Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
					      </div>
					      <?php echo "<small class='form-text text-danger'>".$msg_lname."</small>"; ?>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr font-weight-bold" for="email">Email</label>
					      <div class="input-group">
					        <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email">
					      </div>
					      <?php echo "<small class='form-text text-danger'>".$msg_email."</small>"; ?>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr font-weight-bold" for="dob">Date of Birth</label>
					      <div class="input-group">
					        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" max="<?=date('Y-m-d',strtotime(date('Y-m-d')))?>" name="dob" required>
					      </div>
					    </div>
					    <div class="col-6 col-md-3 pb-md-4">
					      <label class="sr font-weight-bold" for="favColor" id="color">Favourite Colour:</label>
					      <div class="input-group">
					        <input type="color" class="form-control" id="favColor" name="favColor" required>
					      </div>
					    </div>
					    <div class="col-6 col-md-4 pb-md-4">
					      <label class="sr font-weight-bold">Gender</label>
					      	<div class="form-inline justify-content-center">
						      <div class="custom-control custom-checkbox pr-3">
						        <input type="checkbox" class="custom-control-input" id="male" name="genderCheck[]" value="Male">
						        <label class="custom-control-label" for="male">Male</label>
						      </div>
						      <div class="custom-control custom-checkbox">
						        <input type="checkbox" class="custom-control-input" id="female" name="genderCheck[]" value="Female">
						        <label class="custom-control-label" for="female">Female</label>
						      </div>
						    </div>
						    <?php echo "<small class='form-text text-danger'>".$msg_gender."</small>"; ?>
					    </div>
					    <div class="col-12 col-md-5 pt-4 pt-md-0 pb-4">
					      <label class="sr font-weight-bold" for="department">Department</label>
					      <div class="form-group">
					        <select class="form-control" name="department" id="department">
					            <option selected disabled>Select Department...</option>
					            <option value="IT" <?= ($_POST['department'] == "1")? "selected":"";?>>IT</option>
					            <option value="HR" <?= ($_POST['department'] == "1")? "selected":"";?>>HR</option>
					            <option value="Stuff" <?= ($_POST['department'] == "1")? "selected":"";?>>Stuff</option>
				            </select>
					      </div>
					      <?php echo "<small class='form-text text-danger'>".$msg_department."</small>"; ?>
					    </div>
					    <div class="col-12 pb-4">
					      <label class="sr font-weight-bold" for="password">Password</label>
					      <div class="input-group">
					        <input type="password" class="form-control" id="password" placeholder="Strong Password" aria-describedby="passwordHelpBlock" name="password">
					      </div>
					      <?php echo "<small class='form-text text-danger pt-1'>".$msg_password."</small>"; ?>
					    </div>
					    <div class="col-12">
					      <button type="submit" class="btn btn-danger mr-auto text-white px-4 w-100" name="submit">Submit</button>
					    </div>
					</div>
				</form>			
			</div>
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