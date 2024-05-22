<?php

	session_start();
	require_once("bdconnect.php");
	if(isset($_SESSION['userid'])){
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/style3.css" />
	
	<!--Text Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allison&family=Hina+Mincho&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>

	<div class="header">
		<div class="container">
			<img src="logo.png" alt="logo" />
		</div>
	</div>
	
	<br /><br />	
	
	<div class="container">
		<div class="success">
		  <p><strong><?php echo $_SESSION['comments']; ?></strong> <?php echo $_SESSION['message']; ?></p>
		</div>
	</div>
	
	<br /><br />
	<br /><br />

	
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3 logout_button">
				<form action="logoutprocess.php">
					<button id="img3"> <img src="logout_icon.png" alt="Log Out Icon" /> </button>
				</form>
				
				<h3>Log Out</h3>
			</div>
		</div>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	<br />

	<div class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">Copy right</div>
				<div class="col-sm-6"> Date: </div>
			</div>
		</div>
	</div>
</body>
</html>

<?php } else {
	echo"<script>
					alert('Frist Enter ID or Password. Please try again..!');
					window.location = 'index.php';
				</script>";
		}
?>