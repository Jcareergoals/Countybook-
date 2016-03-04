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
				margin-top: 40px; 
				border-radius: 5px; 
				padding: 10px; 
			}
			.btn {
				background-color: green; 
				box-shadow: 2px 2px 5px black; 
				color: white; 
				border: 1px solid black; 
			}
		</style>
	</head>
	<body>
		<ul class="nav nav-tabs">
		  <li role="presentation" class="col-xs-offset-1"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#">Dashboard</a></li>
		  <li role="presentation" class='active'><a href="#">Profile</a></li>
		  <li role="presentation" class="col-md-offset-7 col-sm-offset-5 col-xs-offset-3"><a href="users/login">Log off</a></li>
		</ul>
		<div class="container col-xs-10 col-xs-offset-1">
			<h4><?php echo "Jose Chery"; ?></h4>
			<p>Registered at:</p><?php echo "5:30px"; ?>
			<p>User ID:</p><?php echo "#1"; ?>
			<p>Email address:</p><?php echo #email ?>
			<p>Description:</p><?php echo #description ?>
			<form>
				<label for='post'>Leave a message for</label>
				<textarea id='post' name='post' class='form-control'></textarea>
				<button type='submit' class='btn'>Post</button>
			</form>
		</div> <!-- End Container -->
	</body> 
</html>