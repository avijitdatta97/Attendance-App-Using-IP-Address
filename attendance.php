<?php

	session_start();
	require_once("bdconnect.php");
	if(isset($_SESSION['userid'])){
		$user_id = $_SESSION['userid'];
		$user_name = $_SESSION['username'];
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
		<br />
		<h1 id="name_h1">Welcome <?php echo $user_name?></h1>
		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3 attendace_button">
				<form action="take_data.php">
					<button id="img2"> <img src="attendance_icon.png" alt="Attendance Icon" /> </button>
				</form>
				
				<h3>Please Press The Button For Giving Attendance. </h3>
			</div>
		</div>
	</div>
	
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
	
	<div class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">Licensed To: <a href="http://www.agatafeedmill.com" target="_blank"> Agata Feed Mills Ltd. </a></div>
				<div class="col-sm-6"> Powered By: Avijit Datta </div>
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