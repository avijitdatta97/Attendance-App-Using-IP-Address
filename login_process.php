<?php

session_start();

require_once("bdconnect.php");

if(isset($_REQUEST["id"]) && isset($_REQUEST["pass"]))
	{
		$user_id = $_REQUEST["id"];
		$user_password = $_REQUEST["pass"];
		

		$log1 = "select * from user_account where id='$user_id' && password='$user_password'";
		$result1 = mysqli_query($connect,$log1);
		$num1 = mysqli_num_rows($result1);
		
		if($num1 == 1){
			$_SESSION['userid'] = $user_id;
									
			$s = "select name from user_account where id='$user_id'";
			$r = mysqli_query($connect,$s);
							
			while($row = mysqli_fetch_assoc($r)){
				$_SESSION['username'] = $row['name'];
			}
			header('location:attendance.php');
		}
		else
		{
			echo"<script>
					alert('Invalid ID or Password.Please try again..!');
					window.location = 'index.php';
				</script>";
		}	
	}
	else{
		echo "INSERT data first!!";
	}
?>