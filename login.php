<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
		/* .container {
			background-color: white;
		}
      .panel {
			background-color: #f4f4f4;
			padding: 10px;
		} */
      .login-container {
        background-color: #e9ecef;
        border-radius: 10px;
        padding: 30px;
        margin-top: 50px;
      }
	</style>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2>Sign In</h2>
				<div class="panel panel-default">
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" placeholder="Enter password">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
