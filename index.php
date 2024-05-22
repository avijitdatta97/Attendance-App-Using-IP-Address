<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/style3.css" />
	
	<script type="text/javascript">
        function loginvalidation(){
            var id = document.loginform.id.value;
            var pass = document.loginform.pass.value;
                
            if(id==""){
                alert("Please Enter ID");
                document.loginform.id.value;
                return false;
            }
            else if(pass == ""){
                alert("Please Enter Password");
                document.loginform.pass.value;
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
					<h1>Log In</h1> <br />
					
					<form name="loginform" action="login_process.php" method="post">
						<input type="hidden" name="loginpage" value="submit">

						<label for="id"> <h3> ID </h3> </label> <br />
						<input id="id" type="text" name="id" placeholder="ID" /><br />
						
						<label for="pass"><h3> Password </h3></label> <br />
						<input id="pass" type="password" name="pass" placeholder="Password"/>
						
						<br /><br />
						<button id="submit_button" onclick="return loginvalidation();" value="login" type="submit"> Log In </button><br />
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