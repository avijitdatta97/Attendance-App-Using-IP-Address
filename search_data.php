<?php

	session_start();
	require_once("bdconnect.php");
	if(isset($_SESSION['admin_id'])){
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
	
	<script type="text/javascript">
        function attendancesearchvalidation(){
            var search_name = document.attendancesearch.search_name.value;
            var search_month = document.attendancesearch.search_month.value;
            var search_year = document.attendancesearch.search_year.value;
                
            if(search_name==""){
                alert("Please Enter Name");
                document.attendancesearch.search_name.value;
                return false;
            }
            else if(search_month == "Choose..."){
                alert("Please Enter Month");
                document.attendancesearch.search_month.value;
                return false;
            }
			else if(search_year == "Choose..."){
                alert("Please Enter Year");
                document.attendancesearch.search_year.value;
                return false;
            }
        }
    </script>

</head>
<body>
	
	<div class="header">
		<div class="container">
			<img src="logo.png" alt="logo" />
		</div>
		
		<br />
		<h1 id="name_h1"> Welcome <?php echo $_SESSION['admin_name']; ?> </h1>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	
	<div class="container">
		<div class="details">
			<div class="table">
		
					<form name="attendancesearch" action="show_data_process.php" method="post">
						<input type="hidden" name="loginpage" value="submit">
						
					<div class="row" style="text-align: center;">
						<div class="col-md-3">
							<input id="search_name" type="text" name="search_name" placeholder="Name" />
						</div>
						
						<div class="col-md-3">
							<div class="input-group mb-3">
							  <select class="custom-select" id="inputGroupSelectmonth" name="search_month">
								<option selected>Choose...</option>
								<option value="01">January</option>
								<option value="02">February</option>
								<option value="03">March</option>
								<option value="04">April</option>
								<option value="05">May</option>
								<option value="06">June</option>
								<option value="07">July</option>
								<option value="08">August</option>
								<option value="09">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							  </select>
							  <div class="input-group-append">
								<label class="input-group-text" for="inputGroupSelectmonth">Month</label>
							  </div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="input-group mb-3">
							  <select class="custom-select" id="inputGroupSelectyear" name="search_year">
								<option selected>Choose...</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
							  </select>
							  <div class="input-group-append">
								<label class="input-group-text" for="inputGroupSelectyear">Year</label>
							  </div>
							</div>
						</div>
						
						<div class="col-md-3">
							<button id="search" onclick="return attendancesearchvalidation();" value="search" type="submit"> <img src="search.png" alt="search_icon" /> </button><br />
						</div>
						
					</div>	
					</form>
			</div>	
		</div>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	<br />
	
	<div class="container logout_button">
		<form action="Admin_logout.php">
			<button id="img3"> <img src="logout_icon.png" alt="Log Out Icon" /> </button>
		</form>
							
		<h3>Log Out</h3>
	</div>
	

	<br />
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
			window.location = 'admin.php';
		</script>";
		}
?>