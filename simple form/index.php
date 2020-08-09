<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- BOOTSTRAP V4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		input,button,.form-control{border-radius: 10px !important;}
	</style>
</head>
<body>
	<div class="container py-4 py-md-5">
		<div class="row mx-auto">
			<div class="col text-center">
				<h1>Contact Form</h1>
				<p>Please fill in your details below. Kindly note that ALL fields are required. Thank you!</p>
				<form class="pt-3 my-4" action="form.php" method="post">
					<div class="row justify-content-center mx-md-5 px-md-4">
					    <div class="col-6">
					      <label class="sr font-weight-bold" for="firstName">First Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
					      </div>
					    </div>
					    <div class="col-6">
					      <label class="sr font-weight-bold" for="lastName">Last Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
					      </div>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr font-weight-bold" for="email">Email</label>
					      <div class="input-group">
					        <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email" required>
					      </div>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr font-weight-bold" for="dob">Date of Birth</label>
					      <div class="input-group">
					        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" max="<?=date('Y-m-d',strtotime(date('Y-m-d')))?>" name="dob" required>
					      </div>
					    </div>
					    <div class="col-6 col-md-3 pb-md-4">
					      <label class="sr font-weight-bold" for="favColor" id="color">Favorite color:</label>
					      <div class="input-group">
					        <input type="color" class="form-control" id="favColor" name="favColor" required>
					      </div>
					    </div>
					    <div class="col-6 col-md-4 pb-md-4">
					      <label class="sr font-weight-bold">Gender</label>
					      	<div class="form-inline justify-content-center">
						      <div class="custom-control custom-checkbox pr-3">
						        <input type="checkbox" class="custom-control-input" id="male">
						        <label class="custom-control-label" for="male">Male</label>
						      </div>
						      <div class="custom-control custom-checkbox">
						        <input type="checkbox" class="custom-control-input" id="female">
						        <label class="custom-control-label" for="female">Female</label>
						      </div>
						    </div>
					    </div>
					    <div class="col-6 col-md-5 pb-md-4">
					      <label class="sr font-weight-bold" for="department">Department</label>
					      <div class="form-group">
					        <select class="form-control" id="department" required>
					            <option selected disabled>Select Department...</option>
					            <option value="IT">IT</option>
					            <option value="HR">HR</option>
					            <option value="Stuff">Stuff</option>
				            </select>
					      </div>
					    </div>
					    <div class="col-12 pb-md-4">
					      <label class="sr font-weight-bold" for="password">Password</label>
					      <div class="input-group">
					        <input type="password" class="form-control" id="password" placeholder="Strong Password" aria-describedby="passwordHelpBlock" name="password" required>
					        <small id="passwordHelpBlock" class="form-text text-muted pt-1">
					          Your password must be at least 15 characters long, contain numbers, uppercase and lowercase letters, and must contain special characters such as %^&@
					        </small>
					      </div>
					    </div>
					    <div class="col-12">
					      <button type="submit" class="btn btn-danger mr-auto text-white px-4 w-100" name="submit" onclick="genderCheck()">Submit</button>
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

	<script type="text/javascript">
		function genderCheck(){
			if(male.checked==false && female.checked==false )
			{
			 alert("You must select male or female");
			 return false;
			 }
			if(male.checked==true && female.checked==true )
			{
			 alert("You must select one gender male or female");
			 return false;
			 }
		}
	</script>
</body>
</html>