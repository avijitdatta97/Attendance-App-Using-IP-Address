<?php

	session_start();
	require_once("bdconnect.php");
	if(isset($_SESSION['admin_id'])){
	if(isset($_SESSION['search_name']) && isset($_SESSION['search_month']) && isset($_SESSION['search_year'])){
		$get_serch_name = $_SESSION['search_name'];
		$get_serch_month = $_SESSION['search_month'];
		$get_serch_year = $_SESSION['search_year'];
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
	
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-sm-6">
				<a href="search_data.php"> <img src="back.png" alt="Back_Button"/> </a>
			</div>
			<div class="col-sm-6">
				<a href="pdf.php" target="_blank"> <img src="download_pdf.png" alt="Download_PDF_Icon" /> </a>
			</div>
		</div>
	</div>
	
	<br />
	
	<?php
		$report_query = "select * from attendance_report where name='$get_serch_name' && month='$get_serch_month' && year='$get_serch_year'";
		$report_result = mysqli_query($connect,$report_query);
	?>

	<div class="container">
		<table class="table table-bordered table-info table-striped table-hover">
			<thead>
			  <tr>
				<th>Date</th>
				<th>Name</th>
				<th>Status</th>
				<th>Time</th>
				<th>IP</th>
				<th>Device</th>
				<th>Windows</th>
			  </tr>
			</thead>
			<tbody>
			
			<?php
				while($row = mysqli_fetch_assoc($report_result)){
			?>
			  <tr>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['ip']; ?></td>
				<td><?php echo $row['device']; ?></td>
				<td><?php echo $row['os']; ?></td>
			  </tr>
			
			
			<?php 
				}
	}
	else{
		echo"<script>
			alert('Sorry!! Data Not Select. Please try again..!');
		</script>";
	}
				
			?>
			
			</tbody>
		</table>
	</div>
	
	
	<div class="container logout_button">
		<form action="Admin_logout.php">
			<button id="img3"> <img src="logout_icon.png" alt="Log Out Icon" /> </button>
		</form>
							
		<h3>Log Out</h3>
	</div>
	
	
	
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
			alert('Enter All Input. Please try again..!');
			window.location = 'search_data.php';
		</script>";
		}
?>