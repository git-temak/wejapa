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
<body>
	<div class="container py-4 py-md-5">
		<div class="row mx-auto">
			<div class="col text-center">
				<h1>Signup Form</h1>
				<p>Please fill in your details below. Kindly note that ALL fields are required. Thank you!</p>
				<form class="pt-3 my-4" action="form.php" method="post" onsubmit="return !!(genderValidation() & departmentValidation());">
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
					        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" max="<?=date('Y-m-d',strtotime(date('d-m-Y')))?>" name="dob" required>
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
					      	<div style="display:none; color:red; " id="chk_option_error">
					      	Please select at least one option.
					      	</div>
					      	<div class="form-inline justify-content-center">
						      <div class="custom-control custom-checkbox pr-3">
						        <input type="checkbox" class="custom-control-input" id="male" name="genderCheck">
						        <label class="custom-control-label" for="male">Male</label>
						      </div>
						      <div class="custom-control custom-checkbox">
						        <input type="checkbox" class="custom-control-input" id="female" name="genderCheck">
						        <label class="custom-control-label" for="female">Female</label>
						      </div>
						    </div>
					    </div>
					    <div class="col-6 col-md-5 pb-md-4">
					      <label class="sr font-weight-bold" for="department">Department</label>
					      <div class="form-group">
					        <select class="form-control" name="department" id="department">
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

	<script type="text/javascript">
		function genderValidation()
		{
		    var form_data = new FormData(document.querySelector("form"));
		    
		    if(!form_data.has("genderCheck"))
		    {
		        document.getElementById("chk_option_error").style.display = "block";
		        return false;
		    }
		    else
		    {
		        document.getElementById("chk_option_error").style.display = "none";
		        return true;
		    }
		}

		function departmentValidation()
            {
                var e = document.getElementById("department");
                var strUser = e.options[e.selectedIndex].value;

                var strUser1 = e.options[e.selectedIndex].text;
                if(strUser==0)
                {
                    alert("Please select a department");
                    return false;
                }
                return true;
            }
	</script>
</body>
</html>