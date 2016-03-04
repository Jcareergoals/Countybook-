<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
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
			button {
				color: white; 
				background-color: blue; 
				border: 1px solid black; 
				box-shadow: 2px 2px 5px black; 
				padding: 5px; 
				border-radius: 5px; 
			}
		</style>
	</head>
	<body>
		<ul class="nav nav-tabs">
		  <li role="presentation" class="active col-xs-offset-1"><a href="#">Home</a></li>
		  <li role="presentation" class="col-sm-offset-9 col-xs-offset-8"><a href="users/login">Sign In</a></li>
		</ul>
		<div class="container col-xs-10 col-xs-offset-1">
			<div class="row">
				<div class="col-xs-12">
					<h2>Welcome Countybook</h2>
					<p>This is a pretty fun application created by Jose. Think of it as a mini-facebook. If you have not 
						yet registered, feel free to register and explore. Your visit is highly apprecieated.</p>
					<button>Start the Experience</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<h3>Manage Users</h3>
					<p>While using this application as an administrator, you'll be able to add, remove, and edit users for this application.</p>
				</div>
				<div class="col-xs-4">
					<h3>Leave Messages</h3>
					<p>Users will be able to leave posts and comments to other users profiles and posts.</p>
				</div>
				<div class="col-xs-4">
					<h3>Edit User Information</h3>
					<p>Admins will be able to edit another user's information (email address, first name, last name, etc)</p>
				</div>
			</div>
		</div> <!-- End Container -->
	</body> 
</html>