<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New User</title>
		<meta charset="UTF-8">
		<!-- Jquery	 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style type="text/css">
			.container {
				min-width: 500px; 
				border: 1px solid silver; 
				background-color: rgb(250,250,250); 
				margin-top: 40px; 
				border-radius: 5px; 
				padding: 10px; 
			}
			.grey {
				background-color: grey; 
			}
			.submit {
				background-color: green; 
				padding: 5px; 
				margin-top: 10px; 
				border: 2px solid black; 
				box-shadow: 2px 2px 5px black; 
				color: white; 
			}
			.btn {
				background-color: blue; 
				border: 2px solid black; 
				box-shadow: 2px 2px 5px black; 
				color: white; 
			}
		</style>
	</head>
	<body>
		<ul class="nav nav-tabs">
		  <li role="presentation" class="col-xs-offset-1"><a href="#">Home</a></li>
		  <li role="presentation"><a href="users/login">Dashboard</a></li>
		  <li role="presentation"><a href="users/login">Profile</a></li>
		  <li role="presentation" class="col-sm-offset-7 col-xs-offset-6"><a href="users/login">Sign In</a></li>
		</ul>
		<div class="container col-xs-4 col-xs-offset-1 .grey">
			<h4 class="col-xs-6">Add a new user</h4>
			<a href=""><button class='btn col-xs-offset-2'>Return to dashboard</button></a>
			<form action='' method='post' class='form'>
				<div class="form-group">
					<label for='email' class='col-xs-12 control-label'>Email Address:</label>
					<div class="col-xs-12">
						<input type='text' name='email' id='email' class='form-control'>
					</div>
				</div>
				<div class="form-group">
					<label for='first_name' class='col-xs-12 control-label'>First Name:</label>
					<div class="col-xs-12">
						<input type='text' id='first_name' name='first_name' class='form-control'>
					</div>
				</div>
				<div class="form-group">
					<label for='last_name' class='col-xs-12 control-label'>Last Name:</label>
					<div class="col-xs-12">
						<input type='text' id='last_name' name='last_name' class='form-control'>
					</div>
				</div>
				<div class="form-group">
					<label for='password' class='col-xs-12 control-label'>Password</label>
					<div class="col-xs-12">
						<input type='password' id='password' name='password' class='form-control'>
					</div>
				</div>
				<div class="form-group">
					<label for='confirm_password' class='col-xs-12 control-label'>Password Confirmation</label>
					<div class="col-xs-12">
						<input type='password' id='confirm_password	' name='confirm_password' class='form-control'>
					</div>
				</div>
				<button type='submit' class='col-xs-offset-10 btn submit'>Create</button>
			</form>
		</div> <!-- End Container -->
	</body> 
</html>