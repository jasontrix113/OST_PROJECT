<html lang="en">
	<header>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</header>
	<head>
		<?php require 'db_connect.php'; ?>
		<?php
		if(!empty($_POST))
		{

			$uname = $_POST['uname'];
			$pass = $_POST['pword'];
			$passmd5 = md5($pass);
			$login_query = 'SELECT * FROM `users`';
			$query  = mysqli_query($con, $query);
			while($row = mysqli_fetch_assoc($login_query))
        	{
            	if($row['user-username'] == $uname && $row['user-pass'] == $passmd5)  
            	{    
            		$_SESSION['uname'] = $uname;
                	header('location: dashboard.php');
            	}
        	}  

		}
		?>


	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="panel panel-default col-sm-4 col-sm-offset-4" style="margin-top: 20px;">
					<div class="panel-heading" style="text-align: center; background: transparent;">
						<h2>Login</h2>
					</div>
					<div class="panel-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="username" class="label-control">Username</label>
								<input type="text" class="form-control" name="uname" id="username">
							</div>
							<div class="form-group">
								<label for="password" class="label-control">Password</label>
								<input type="password" class="form-control" name="pword" id="password">
							</div>
							<div class="form-group">
								<br>
								<input type="submit" class="btn btn-success btn-block" value="Login" id="login-btn">
							</div>
						</form>
					</div>
					<div class="panel-footer" style="background: transparent;">
						<p>Dont have an Account? <a href="signup-form.php" class="link">Create an account.</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>