<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/style3.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<!--Text Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allison&family=Hina+Mincho&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
	
	<script type="text/javascript">
        function adminloginvalidation(){
            var admin_id = document.adminloginform.admin_id.value;
            var admin_pass = document.adminloginform.admin_pass.value;
                
            if(admin_id==""){
                alert("Please Enter ID");
                document.adminloginform.admin_id.value;
                return false;
            }
            else if(admin_pass == ""){
                alert("Please Enter Password");
                document.adminloginform.admin_pass.value;
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
	</div>
	
	
	<div class="container">
		<div class="row">
		<div class="col-6 offset-3">
			<div class="middle">
				<div class="login_box">
					<h1>Admin Log In</h1> <br />
					
					<form name="adminloginform" action="admin_login_process.php" method="post">
						<input type="hidden" name="loginpage" value="submit">

						<label for="admin_id"> <h3> ID </h3> </label> <br />
						<input id="admin_id" type="text" name="admin_id" placeholder="ID" /><br />
						
						<label for="admin_pass"><h3> Password </h3></label> <br />
						<input id="admin_pass" type="password" name="admin_pass" placeholder="Password"/>
						
						<br /><br />
						<button id="submit_button" onclick="return adminloginvalidation();" value="login" type="submit">Admin Log In </button><br />
						<br /><br />
					</form>
				</div>
			</div>
		</div>	
		</div>
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