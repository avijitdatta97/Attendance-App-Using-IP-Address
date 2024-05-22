<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/style3.css" />
	
</head>
<body>
	
	<div class="header">
		<div class="container">
			<img src="logo.png" alt="logo" />
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
		<div class="col-6 offset-3">
			<div class="middle">
				<div class="login_box">
					<h1>Information Gathering</h1> <br />
					
					<form name="get_data" action="get_data_process.php" method="post">
						<input type="hidden" name="loginpage" value="submit">

						<label for="getname"> <h3> Name </h3> </label> <br />
						<input id="getname" type="text" name="getname" placeholder="name" /><br />
						
						<br /><br />
						<button id="submit_button" onclick="return loginvalidation();" value="login" type="submit"> Submit </button><br />
						<br /><br />
					</form>
				</div>
			</div>
		</div>	
		</div>
	</div>
	
</body>
</html>